jQuery(document).ready(function ($) {
  const $button = $(".site-header--burger .menu-toggle");
  const $menu = $("#fullscreen-menu");
  const $body = $("body");
  const $links = $(".fullscreen-menu__list a");

  $button.on("click", function () {
    const isOpen = $button.hasClass("is-open");

    $button.toggleClass("is-open");
    $menu.toggleClass("is-open");
    $body.toggleClass("menu-open");

    $button.attr("aria-expanded", String(!isOpen));
    $menu.attr("aria-hidden", String(isOpen));
  });

  $links.on("click", function () {
    $button.removeClass("is-open");
    $menu.removeClass("is-open");
    $body.removeClass("menu-open");

    $button.attr("aria-expanded", "false");
    $menu.attr("aria-hidden", "true");
  });
});
