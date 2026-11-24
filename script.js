const menuToggle = document.querySelector(".menu-toggle");
const navLinks = document.querySelector(".nav-links");
const currentYear = document.querySelector("#current-year");
const pageLoader = document.querySelector("#page-loader");
const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

if (window.AOS && !reduceMotion) {
    window.AOS.init({
        duration: 700,
        easing: "ease-out-cubic",
        once: true,
        offset: 80,
    });
} else {
    document.querySelectorAll("[data-aos]").forEach((element) => {
        element.removeAttribute("data-aos");
        element.removeAttribute("data-aos-delay");
    });
}

if (pageLoader) {
    const minimumDisplayTime = reduceMotion ? 0 : 650;
    const loadingStartedAt = Date.now();
    const hidePageLoader = () => {
        window.setTimeout(() => {
            pageLoader.classList.add("is-hidden");
            window.setTimeout(() => pageLoader.remove(), 400);
        }, Math.max(0, minimumDisplayTime - (Date.now() - loadingStartedAt)));
    };

    if (document.readyState === "complete") {
        hidePageLoader();
    } else {
        window.addEventListener("load", hidePageLoader, { once: true });
    }
}

if (currentYear) {
    currentYear.textContent = new Date().getFullYear();
}

if (menuToggle && navLinks) {
    const closeMenu = () => {
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Buka navigasi");
        navLinks.classList.remove("is-open");
        document.body.classList.remove("menu-open");
    };

    menuToggle.addEventListener("click", () => {
        const isExpanded = menuToggle.getAttribute("aria-expanded") === "true";
        menuToggle.setAttribute("aria-expanded", String(!isExpanded));
        menuToggle.setAttribute("aria-label", isExpanded ? "Buka navigasi" : "Tutup navigasi");
        navLinks.classList.toggle("is-open", !isExpanded);
        document.body.classList.toggle("menu-open", !isExpanded);
    });

    navLinks.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", closeMenu);
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            closeMenu();
            menuToggle.focus();
        }
    });
}

if (navLinks) {
    const sectionLinks = [...navLinks.querySelectorAll('a[href^="#"]')]
        .map((link) => ({ link, section: document.querySelector(link.getAttribute("href")) }))
        .filter(({ section }) => section && section.closest("main"));
    const header = document.querySelector(".site-header");
    let activeNavigationFrame = 0;
    let navigationScrollTimer = 0;
    let isNavigatingToSection = false;

    const setActiveNavigation = (activeLink) => {
        sectionLinks.forEach(({ link }) => {
            const isActive = link === activeLink;
            link.classList.toggle("active", isActive);
            if (isActive) {
                link.setAttribute("aria-current", "location");
            } else {
                link.removeAttribute("aria-current");
            }
        });
    };

    const updateActiveNavigation = () => {
        activeNavigationFrame = 0;
        const activationLine = (header?.getBoundingClientRect().height ?? 0) + 12;
        let activeLink = sectionLinks[0]?.link;

        sectionLinks.forEach(({ link, section }) => {
            if (section.getBoundingClientRect().top <= activationLine) {
                activeLink = link;
            }
        });

        setActiveNavigation(activeLink);
    };

    const scheduleActiveNavigationUpdate = () => {
        if (isNavigatingToSection) {
            window.clearTimeout(navigationScrollTimer);
            navigationScrollTimer = window.setTimeout(() => {
                isNavigatingToSection = false;
                updateActiveNavigation();
            }, 1000);
        } else if (!activeNavigationFrame) {
            activeNavigationFrame = window.requestAnimationFrame(updateActiveNavigation);
        }
    };

    const finishSectionNavigation = () => {
        if (!isNavigatingToSection) {
            return;
        }

        window.clearTimeout(navigationScrollTimer);
        isNavigatingToSection = false;
        updateActiveNavigation();
    };

    navLinks.addEventListener("click", (event) => {
        const link = event.target.closest('a[href^="#"]');
        const target = sectionLinks.find(({ link: sectionLink }) => sectionLink === link);
        if (!target) {
            return;
        }

        event.preventDefault();
        isNavigatingToSection = true;
        window.clearTimeout(navigationScrollTimer);
        navigationScrollTimer = window.setTimeout(() => {
            isNavigatingToSection = false;
            updateActiveNavigation();
        }, 1000);
        if (window.location.hash !== link.hash) {
            window.history.pushState(null, "", link.hash);
        }
        setActiveNavigation(target.link);
        window.requestAnimationFrame(() => {
            const headerOffset = (header?.getBoundingClientRect().height ?? 0) + 1;
            const targetTop = window.scrollY + target.section.getBoundingClientRect().top - headerOffset;
            const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
            window.scrollTo({
                top: Math.max(0, targetTop),
                behavior: reduceMotion ? "instant" : "smooth",
            });
        });
    });

    window.addEventListener("scroll", scheduleActiveNavigationUpdate, { passive: true });
    window.addEventListener("scrollend", finishSectionNavigation, { passive: true });
    window.addEventListener("resize", scheduleActiveNavigationUpdate);
    window.addEventListener("hashchange", scheduleActiveNavigationUpdate);
    updateActiveNavigation();
}

const portfolioTabs = [...document.querySelectorAll(".portfolio-tab")];
const portfolioPanels = [...document.querySelectorAll(".portfolio-panel")];
const portfolioControls = document.querySelector(".portfolio-section .portfolio-carousel-controls");
const portfolioPrev = portfolioControls?.querySelector(".portfolio-prev");
const portfolioNext = portfolioControls?.querySelector(".portfolio-next");

if (portfolioTabs.length && portfolioPanels.length && portfolioPrev && portfolioNext) {
    const activePortfolioTrack = () => document.querySelector("#portfolio-panel-projects .portfolio-track");

    const updatePortfolioControls = () => {
        const track = activePortfolioTrack();
        if (!track) {
            portfolioPrev.disabled = true;
            portfolioNext.disabled = true;
            return;
        }

        const maxScroll = track.scrollWidth - track.clientWidth;
        portfolioPrev.disabled = track.scrollLeft <= 2;
        portfolioNext.disabled = maxScroll <= 1 || track.scrollLeft >= maxScroll - 1;
    };

    const activatePortfolioTab = (selectedTab, moveFocus = false) => {
        const selectedCategory = selectedTab.dataset.portfolioTab;
        portfolioControls.hidden = selectedCategory !== "projects";

        portfolioTabs.forEach((tab) => {
            const isSelected = tab === selectedTab;
            tab.classList.toggle("is-active", isSelected);
            tab.setAttribute("aria-selected", String(isSelected));
            tab.tabIndex = isSelected ? 0 : -1;
            if (isSelected && moveFocus) {
                tab.focus();
            }
        });

        portfolioPanels.forEach((panel) => {
            const isSelected = panel.dataset.portfolioPanel === selectedCategory;
            panel.classList.toggle("is-active", isSelected);
            panel.classList.remove("is-entering");
            panel.hidden = !isSelected;
            if (isSelected) {
                const track = panel.querySelector(".project-track");
                if (track) {
                    track.scrollLeft = 0;
                }
                void panel.offsetWidth;
                panel.classList.add("is-entering");
            }
        });

        updatePortfolioControls();
    };

    portfolioTabs.forEach((tab, index) => {
        tab.addEventListener("click", () => activatePortfolioTab(tab));
        tab.addEventListener("keydown", (event) => {
            let nextIndex = index;
            if (event.key === "ArrowRight") {
                nextIndex = (index + 1) % portfolioTabs.length;
            } else if (event.key === "ArrowLeft") {
                nextIndex = (index - 1 + portfolioTabs.length) % portfolioTabs.length;
            } else if (event.key === "Home") {
                nextIndex = 0;
            } else if (event.key === "End") {
                nextIndex = portfolioTabs.length - 1;
            } else {
                return;
            }

            event.preventDefault();
            activatePortfolioTab(portfolioTabs[nextIndex], true);
        });
    });

    const scrollPortfolio = (direction) => {
        const track = activePortfolioTrack();
        const item = track?.firstElementChild;
        if (!track || !item) {
            return;
        }

        const gap = Number.parseFloat(getComputedStyle(track).columnGap) || 0;
        track.scrollBy({
            left: direction * (item.getBoundingClientRect().width + gap),
            behavior: "smooth",
        });
    };

    portfolioPrev.addEventListener("click", () => scrollPortfolio(-1));
    portfolioNext.addEventListener("click", () => scrollPortfolio(1));
    const projectTrack = document.querySelector("#portfolio-panel-projects .project-track");
    projectTrack?.addEventListener("scroll", updatePortfolioControls, { passive: true });
    portfolioControls.hidden = !document.querySelector("#portfolio-tab-projects")?.classList.contains("is-active");
    window.addEventListener("resize", updatePortfolioControls);
    updatePortfolioControls();
}

const experienceSection = document.querySelector(".experience-section");
const experienceTrack = experienceSection?.querySelector(".experience-grid");
const experienceControls = experienceSection?.querySelector(".portfolio-carousel-controls");
const experiencePrev = experienceControls?.querySelector(".portfolio-prev");
const experienceNext = experienceControls?.querySelector(".portfolio-next");

if (experienceTrack && experiencePrev && experienceNext) {
    const updateExperienceControls = () => {
        const maxScroll = experienceTrack.scrollWidth - experienceTrack.clientWidth;
        experiencePrev.disabled = experienceTrack.scrollLeft <= 2;
        experienceNext.disabled = maxScroll <= 1 || experienceTrack.scrollLeft >= maxScroll - 1;
    };

    const scrollExperience = (direction) => {
        const card = experienceTrack.querySelector(".experience-card");
        if (!card) {
            return;
        }

        const gap = Number.parseFloat(getComputedStyle(experienceTrack).columnGap) || 0;
        experienceTrack.scrollBy({
            left: direction * (card.getBoundingClientRect().width + gap),
            behavior: window.matchMedia("(prefers-reduced-motion: reduce)").matches ? "instant" : "smooth",
        });
    };

    experiencePrev.addEventListener("click", () => scrollExperience(-1));
    experienceNext.addEventListener("click", () => scrollExperience(1));
    experienceTrack.addEventListener("scroll", updateExperienceControls, { passive: true });
    window.addEventListener("resize", updateExperienceControls);
    updateExperienceControls();
}

const experienceDialog = document.querySelector(".experience-dialog");
const experienceDialogTitle = document.querySelector("#experience-dialog-title");
const experienceDialogEyebrow = document.querySelector(".experience-dialog-header .eyebrow");
const experienceDialogBody = document.querySelector(".experience-dialog-body");
const experienceDialogClose = document.querySelector(".experience-dialog-close");
let openedExperienceCard = null;

if (experienceDialog && experienceDialogTitle && experienceDialogEyebrow && experienceDialogBody && experienceDialogClose) {
    document.querySelectorAll(".experience-card").forEach((card) => {
        card.addEventListener("pointerleave", () => card.classList.remove("is-hover-suppressed"));
        const detailButton = card.querySelector(".experience-detail-button");
        const title = card.querySelector("h3");
        const details = card.querySelector(".experience-extra");
        const gallery = card.querySelector(".experience-gallery");

        if (gallery) {
            const galleryImages = gallery.querySelectorAll(".experience-thumb");
            if (galleryImages.length > 3) {
                const thirdImage = galleryImages[2];
                const moreWrap = document.createElement("span");
                moreWrap.className = "experience-gallery-more-wrap";

                const moreIndicator = document.createElement("span");
                moreIndicator.className = "experience-gallery-more";
                moreIndicator.setAttribute("aria-hidden", "true");
                moreIndicator.textContent = `+${galleryImages.length - 3}`;

                thirdImage.before(moreWrap);
                moreWrap.append(thirdImage, moreIndicator);
            }
        }

        if (!detailButton || !title || !details) {
            return;
        }

        detailButton.addEventListener("click", () => {
            openedExperienceCard = card;
            experienceDialogTitle.textContent = title.textContent;
            experienceDialogEyebrow.textContent = card.closest(".portfolio-section")
                ? "DETAIL PORTFOLIO"
                : "DETAIL PENGALAMAN";
            experienceDialogBody.replaceChildren();

            const detailsContent = details.cloneNode(true);
            detailsContent.hidden = false;
            detailsContent.removeAttribute("hidden");

            experienceDialogBody.append(detailsContent);
            if (gallery) {
                const documentationTitle = document.createElement("h4");
                documentationTitle.textContent = "Dokumentasi";
                const documentationGallery = gallery.cloneNode(true);
                experienceDialogBody.append(documentationTitle, documentationGallery);
            }
            experienceDialog.showModal();
        });
    });

    experienceDialogClose.addEventListener("click", () => experienceDialog.close());
    experienceDialog.addEventListener("close", () => {
        if (openedExperienceCard?.matches(":hover")) {
            openedExperienceCard.classList.add("is-hover-suppressed");
        }
        openedExperienceCard = null;
    });
    experienceDialog.addEventListener("click", (event) => {
        if (event.target === experienceDialog) {
            experienceDialog.close();
        }
    });
}

const certificateDialog = document.querySelector(".certificate-dialog");
const certificateDialogTitle = document.querySelector("#certificate-dialog-title");
const certificateDialogImage = document.querySelector(".certificate-dialog-image");
const certificateDialogClose = document.querySelector(".certificate-dialog-close");

if (certificateDialog && certificateDialogTitle && certificateDialogImage && certificateDialogClose) {
    const openImageDialog = (title, src, alt) => {
        certificateDialogTitle.textContent = title;
        certificateDialogTitle.hidden = !title;
        certificateDialog.classList.toggle("is-image-only", !title);
        certificateDialogImage.src = src;
        certificateDialogImage.alt = alt;
        certificateDialog.showModal();
    };

    document.querySelectorAll(".certificate-open").forEach((button) => {
        button.addEventListener("click", () => {
            const card = button.closest(".certificate-card");
            const preview = button.querySelector(".certificate-preview");
            if (!card || !preview) {
                return;
            }

            const title = card.querySelector("h3")?.textContent?.trim() || preview.alt;
            const description = card.querySelector("p")?.textContent?.trim();
            openImageDialog(
                description ? `${title} — ${description}` : title,
                preview.currentSrc || preview.src,
                preview.alt,
            );
        });
    });

    document.querySelectorAll(".experience-gallery .experience-thumb").forEach((image) => {
        image.tabIndex = 0;
        image.setAttribute("role", "button");
        image.setAttribute("aria-label", `Lihat gambar secara penuh: ${image.alt}`);
    });

    const openDocumentationImage = (event) => {
        const target = event.target;
        if (!(target instanceof Element)) {
            return null;
        }

        const image = target.closest(".experience-gallery .experience-thumb");
        if (!image) {
            return null;
        }
        openImageDialog("", image.currentSrc || image.src, image.alt);
        return image;
    };

    document.addEventListener("click", openDocumentationImage);
    document.addEventListener("keydown", (event) => {
        if (event.key !== "Enter" && event.key !== " ") {
            return;
        }

        const image = openDocumentationImage(event);
        if (image) {
            event.preventDefault();
        }
    });

    certificateDialogClose.addEventListener("click", () => certificateDialog.close());
    certificateDialog.addEventListener("click", (event) => {
        if (event.target === certificateDialog) {
            certificateDialog.close();
        }
    });
}