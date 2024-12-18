/*! syntax.js | Huro | Css ninja 2020-2021 */
"use strict";
$(function () {
  $.when(
    $("pre code").each(function (i, t) {
      hljs.highlightBlock(t);
    })
  ).done(function () {
    $("pre, code").each(function () {
      $(this).html($(this).html().trim());
    });
  }),
    $(".code-trigger").on("click", function () {
      $(this).toggleClass("is-active"),
        $(this)
          .closest(".demo-card")
          .find(".highlight-block")
          .slideToggle("fast");
    });
});
