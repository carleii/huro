/*! apps-2.js | Huro | Css ninja 2020-2021 */
"use strict";$((function(){$(".inbox-sidebar .inbox-menu li a").on("click",(function(){$(".inbox-sidebar .inbox-menu li a").removeClass("is-active"),$(this).addClass("is-active")})),$(".title-wrap .search-button, .title-wrap .cancel-search-button").on("click",(function(){$(this).closest(".title-wrap").find(".control, h3, .button").toggleClass("is-hidden"),$(this).closest(".title-wrap").find("input").val("").focus()})),$(".check-all-action").on("click",(function(){$(this).hasClass("is-checked")?($(this).removeClass("is-checked"),$(".inbox-messages .messages-list").find("input").prop("checked",!1)):($(this).addClass("is-checked"),$(".inbox-messages .messages-list").find("input").prop("checked",!0))})),$(".inbox-message").on("click",(function(){var e=$(this).attr("data-message");$(".inbox-message").removeClass("is-selected"),$(this).addClass("is-selected").removeClass("is-unread"),$(".inbox-message-overlay").addClass("is-active tablet-active"),setTimeout((function(){$(".inbox-message-details").addClass("is-hidden").removeClass("mobile-active tablet-active"),$("#"+e).removeClass("is-hidden").addClass("mobile-active tablet-active")}),450),setTimeout((function(){$(".inbox-message-overlay").removeClass("is-active tablet-active")}),1300)})),$(".compose-button").on("click",(function(){$(".compose-panel").addClass("is-active")})),$(".compose-panel-close").on("click",(function(){$(".compose-panel").removeClass("is-active")})),$(".inbox-close-details-mobile").on("click",(function(){$(".inbox-message-details").removeClass("mobile-active tablet-active"),$(".inbox-message-overlay").removeClass("tablet-active")})),$(".mobile-menu-action").on("click",(function(){$(".inbox-sidebar").addClass("mobile-active")})),$(".inbox-close-sidebar-mobile").on("click",(function(){$(".inbox-sidebar").removeClass("mobile-active")}))}));