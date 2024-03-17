document.addEventListener("DOMContentLoaded", () => {
  InitializeSlick();
  InitializeLightbox();

  document
    .querySelector("#show-more-certificates")
    .addEventListener("click", (e) => {
      const addCertContainer = document.querySelector(
        "#additional-sertificates-container"
      );
      addCertContainer.toggleAttribute("show");
      e.target.style.display = "none";
    });
});

function InitializeSlick() {
  $(".reviews__slick").slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    prevArrow: `<div class="reviews__navigation-item">
                    <a>
                        <img src="wp-content/themes/fromboard/assets/images/navigation/arrow-circle-left.svg" />
                    </a>
                </div>`,
    nextArrow: `<div class="reviews__navigation-item">
                    <a>
                        <img src="wp-content/themes/fromboard/assets/images/navigation/arrow-circle-right.svg" />
                    </a>
                </div>`,
  });

  lightbox.option({
    resizeDuration: 200,
    wrapAround: true,
  });
}

function InitializeLightbox() {
  lightbox.option({
    resizeDuration: 200,
    wrapAround: true,
  });
}
