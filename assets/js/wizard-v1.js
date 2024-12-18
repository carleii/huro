/*! wizard-v1.js | Huro | Css ninja 2020-2021 */
"use strict";
var project = { customer: {}, info: {}, members: [], tools: [] },
  currentStep = 0,
  delay = 1200;
function buildProjectPreview(e) {
  var t;
  "UI/UX Design" == e.type
    ? (t =
        '\n            <div class="h-icon is-medium is-warning is-rounded">\n                <i class="lnil lnil-vector-pen"></i>\n            </div>\n        ')
    : "Web Development" == e.type
    ? (t =
        '\n            <div class="h-icon is-medium is-info is-rounded">\n                <i class="lnil lnil-layout"></i>\n            </div>\n        ')
    : "Marketing" == e.type &&
      (t =
        '\n            <div class="h-icon is-medium is-success is-rounded">\n                <i class="lnil lnil-megaphone"></i>\n            </div>\n        ');
  var i =
    '\n        <div class="media-flex-center">\n            ' +
    t +
    '\n            <div class="flex-meta">\n                <span>' +
    e.type +
    "</span>\n                <span>Project Type</span>\n            </div>\n        </div>\n    ";
  $("#project-preview-type").find(".media-flex-center").remove(),
    $("#project-preview-type").append(i),
    "" != project.name
      ? $("#project-preview-title span").html(project.name)
      : $("#project-preview-title span").html("Project Name Goes Here"),
    "" != project.description
      ? $("#project-preview-description").html(project.description)
      : $("#project-preview-description").html(
          "You didn't enter any description. You can edit it anytime by clicking on the small edit icon."
        ),
    null != project.customer.logoUrl || "" != project.customer.name
      ? ($("#project-preview-customer-logo").attr(
          "src",
          project.customer.logoUrl
        ),
        $("#project-preview-customer-name").html(project.customer.name),
        $("#project-preview-customer-placeholder").addClass("is-hidden"),
        $("#project-preview-customer-block").removeClass("is-hidden"))
      : ($("#project-preview-customer-block").addClass("is-hidden"),
        $("#project-preview-customer-placeholder").removeClass("is-hidden")),
    $("#project-preview-budget span").html(project.info.budget),
    "" != project.info.date
      ? $("#project-preview-date span").html(project.info.date)
      : $("#project-preview-date span").html("Unset"),
    $("#project-preview-attachments span").html(project.info.attachments),
    $("#project-preview-team .media-list-item:not(.is-owner)").remove();
  for (var s = 0; s < project.members.length; s++) {
    var n =
      '\n            <div class="media-list-item">\n                <div class="media-flex-center">\n                    <div class="h-avatar">\n                        <img class="avatar" src="' +
      project.members[s].photoUrl +
      '">\n                    </div>\n                    <div class="flex-meta">\n                        <span>' +
      project.members[s].name +
      "</span>\n                        <span>Member</span>\n                    </div>\n                </div>\n            </div>\n        ";
    $("#project-preview-team").append(n);
  }
  if (
    ($("#project-preview-tools .media-list-item").remove(),
    project.tools.length > 0)
  ) {
    $("#project-preview-tools-placeholder").addClass("is-hidden"),
      $("#project-preview-tools").removeClass("is-hidden");
    for (var r = 0; r < project.tools.length; r++) {
      var a =
        '\n                <div class="media-list-item">\n                    <div class="media-flex-center">\n                        <div class="h-avatar is-small">\n                            <img class="avatar" src="' +
        project.tools[r].photoUrl +
        '">\n                        </div>\n                        <div class="flex-meta">\n                            <span>' +
        project.tools[r].name +
        "</span>\n                            <span>" +
        project.tools[r].type +
        "</span>\n                        </div>\n                    </div>\n                </div>\n            ";
      $("#project-preview-tools").append(a);
    }
  } else
    $("#project-preview-tools").addClass("is-hidden"),
      $("#project-preview-tools-placeholder").removeClass("is-hidden");
  console.log(project);
}
function handleProgress(e) {
  $("#wizard-progress").val(e);
}
function goToStep(e) {
  (currentStep = e),
    $(".wizard-v1-wrapper .inner-wrapper").removeClass("is-active"),
    $("#wizard-step-" + e).addClass("is-active");
  var t =
    '\n        <span class="title-wrap">Step ' +
    (e + 1) +
    ": <span>" +
    $(".inner-wrapper.is-active").attr("data-step-title") +
    "</span></span>\n    ";
  $(".is-wizard-title").html(t),
    $(".project-preview-loader").addClass("is-active"),
    currentStep > 0 && $(".wizard-buttons").addClass("is-active"),
    0 == currentStep
      ? (handleProgress(15), $(".wizard-buttons").removeClass("is-active"))
      : 1 == currentStep
      ? handleProgress(25)
      : 2 == currentStep
      ? handleProgress(45)
      : 3 == currentStep
      ? handleProgress(60)
      : 4 == currentStep
      ? handleProgress(75)
      : 5 == currentStep
      ? handleProgress(85)
      : 6 == currentStep
      ? (handleProgress(95),
        buildProjectPreview(project),
        setTimeout(function () {
          $(".project-preview-loader").removeClass("is-active");
        }, 800))
      : 7 == currentStep &&
        (handleProgress(100),
        $(".wizard-buttons").removeClass("is-active"),
        $(".wizard-dropdown").addClass("is-hidden")),
    $('[data-dropdown-step="' + e + '"]').removeClass("is-disabled");
}
function initPermissions() {
  $(".permission-level-inner")
    .off()
    .on("click", function () {
      var e = $(this),
        t = e.attr("data-progress");
      e.closest(".permission-levels").find(".progress").val(t),
        e.addClass("is-active"),
        e
          .closest(".permission-level")
          .prevAll()
          .find(".permission-level-inner")
          .addClass("is-active"),
        e
          .closest(".permission-level")
          .nextAll()
          .find(".permission-level-inner")
          .removeClass("is-active");
    });
}
function removeMember() {
  $(".invited-member .cancel-button")
    .off()
    .on("click", function () {
      $(this).closest(".invited-member").remove(),
        0 === $(".invited-member").length &&
          $(".empty-wrap").removeClass("is-hidden");
    });
}
function addMember(e, t, i) {
  var s =
    '\n        <div id="invited-member-' +
    e +
    '" class="invited-member">\n            <div class="h-avatar is-medium">\n                <img class="avatar" src="' +
    t +
    '" alt="">\n            </div>\n            <div class="meta">\n                <span>Invited</span>\n                <p class="dark-inverted">' +
    i +
    '</p>\n            </div>\n            <div class="actions">\n                <div class="permissions">\n                    <div class="permission-levels">\n                        <div class="permission-level hint--bubble hint--primary hint--top" aria-label="Reader">\n                            <div class="permission-level-inner is-active" data-progress="20"></div>\n                        </div>\n                        <div class="permission-level hint--bubble hint--primary hint--top" aria-label="Collaborator">\n                            <div class="permission-level-inner" data-progress="50"></div>\n                        </div>\n                        <div class="permission-level hint--bubble hint--primary hint--top" aria-label="Manager">\n                            <div class="permission-level-inner" data-progress="68"></div>\n                        </div>\n                        <div class="permission-level hint--bubble hint--primary hint--top" aria-label="Owner">\n                            <div class="permission-level-inner" data-progress="100"></div>\n                        </div>\n                        <progress class="progress permissions-progress is-primary is-tiny" value="20" max="100">20%</progress>\n                    </div>\n                </div>\n                <button class="button is-circle cancel-button hint--top hint--bubble hint--primary" aria-label="Cancel Invite">\n                    <i class="fas fa-times"></i>\n                </button>\n            </div>\n        </div>\n    ';
  $(".empty-wrap").addClass("is-hidden"),
    $("#invited-member-" + e).length
      ? notyf.open({ type: "warning", message: "You already Invited " + i })
      : ($(".members-list").append(s), removeMember(), initPermissions());
}
$(function () {
  $(".type-select-button").on("click", function () {
    var e = $(this),
      t = $(this).closest(".wizard-card").find("h3").text();
    (project.type = t),
      e.addClass("is-loading"),
      setTimeout(function () {
        e.removeClass("is-loading"), goToStep(currentStep + 1);
      }, delay);
  }),
    $(".wizard-button-next").on("click", function () {
      var e = $(this);
      if ((e.addClass("is-loading"), 1 == currentStep))
        (project.name = $("#project-name").val()),
          (project.description = $("#project-description").val());
      else if (2 == currentStep)
        (project.customer.logoUrl = $(
          ".media-flex-center:not(.is-hidden) #customer-logo"
        ).attr("src")),
          (project.customer.name = $(
            ".media-flex-center:not(.is-hidden) #customer-name"
          ).text()),
          (project.info.date = $("#project-end-date").val()),
          (project.info.budget = $(".budget-item-inner.is-active span").text());
      else if (3 == currentStep)
        project.info.attachments = $(".preview-box").length;
      else if (4 == currentStep) {
        project.members.splice(0, project.members.length),
          $(".invited-member").length > 0 &&
            $(".invited-member").each(function () {
              var e = $(this).find("img").attr("src"),
                t = $(this).find(".meta p").text();
              project.members.push({ name: t, photoUrl: e });
            });
      } else if (5 == currentStep) {
        project.tools.splice(0, project.tools.length),
          $(".tool-card input:checked").length > 0 &&
            $(".tool-card input:checked").each(function () {
              var e = $(this).closest(".tool-card"),
                t = e.find("img").attr("src"),
                i = e.find(".flex-meta span:first-child").text(),
                s = e.find(".flex-meta span:nth-child(2)").text();
              project.tools.push({ name: i, photoUrl: t, type: s });
            });
      }
      setTimeout(function () {
        e.removeClass("is-loading"), goToStep(currentStep + 1);
      }, delay);
    }),
    $(".wizard-button-previous").on("click", function () {
      var e = $(this);
      e.addClass("is-loading"),
        setTimeout(function () {
          e.removeClass("is-loading"), goToStep(currentStep - 1);
        }, delay);
    }),
    $("#wizard-navigation-dropdown .dropdown-item").on("click", function () {
      goToStep(parseInt($(this).attr("data-dropdown-step")));
    });
  var e = document.querySelectorAll(".form-datepicker"),
    t = [];
  console.log(e.length);
  for (var i = 0; i < e.length; i++)
    t[i] = new Pikaday({
      field: e[i],
      firstDay: 1,
      format: "MMM D, YYYY",
      onSelect: function () {},
    });
  var s = {
    url: "assets/data/companies.json",
    getValue: "name",
    template: {
      type: "custom",
      method: function (e, t) {
        return (
          '\n                    <div class="template-wrapper">\n                        <div class="avatar-wrapper">\n                            <img class="autocpl-avatar" src="' +
          t.pic +
          '">\n                        </div>\n                        <div class="entry-text">\n                            <span>' +
          e +
          "</span>\n                            <span>" +
          t.location +
          "</span>\n                        </div>\n                    </div>\n                "
        );
      },
    },
    highlightPhrase: !1,
    list: {
      maxNumberOfElements: 5,
      showAnimation: { type: "fade", time: 400, callback: function () {} },
      match: { enabled: !0 },
      onChooseEvent: function () {
        var e = $("#customers-search").getSelectedItemData();
        $("#customer-logo").attr("src", e.pic),
          $("#customer-name").html(e.name),
          $("#customer-location").html(e.location),
          $(".project-customer")
            .find(".field, .media-flex-center")
            .toggleClass("is-hidden");
      },
    },
  };
  $("#customers-search").easyAutocomplete(s),
    $("#remove-customer").on("click", function () {
      $("#customers-search").val(""),
        $(".project-customer")
          .find(".field, .media-flex-center")
          .toggleClass("is-hidden");
    }),
    $(".project-budget .budget-item-inner").on("click", function () {
      $(this)
        .closest(".project-budget")
        .find(".budget-item-inner")
        .removeClass("is-active"),
        $(this).addClass("is-active");
    }),
    $(".toggle-uploader-link").on("click", function () {
      $(".uploader, .page-placeholder.is-files").toggleClass("is-hidden");
    });
  if (
    ($(".toggle-members-link").on("click", function () {
      $(".project-team-wrapper, .page-placeholder.is-people").toggleClass(
        "is-hidden"
      );
    }),
    $("#add-member").length)
  ) {
    var n = {
      url: "assets/data/user.json",
      getValue: "name",
      template: {
        type: "custom",
        method: function (e, t) {
          return (
            '\n                        <div class="template-wrapper">\n                            <div class="avatar-wrapper">\n                                <img class="autocpl-avatar" src="' +
            t.pic +
            '" alt="">\n                            </div>\n                            <div class="entry-text">\n                                <span>' +
            e +
            "</span>\n                                <span>" +
            t.position +
            "</span>\n                            </div>\n                        </div>\n                    "
          );
        },
      },
      highlightPhrase: !1,
      list: {
        maxNumberOfElements: 5,
        showAnimation: { type: "fade", time: 400, callback: function () {} },
        match: { enabled: !0 },
        onChooseEvent: function () {
          var e = $("#add-member").val(),
            t = $("#add-member").getSelectedItemData().pic;
          addMember($("#add-member").getSelectedItemData().id, t, e),
            $("#add-member").val(""),
            1;
        },
      },
    };
    $("#add-member").easyAutocomplete(n);
  }
  $(".edit-icon").on("click", function () {
    goToStep(parseInt($(this).attr("data-step-edit")));
  });
});
