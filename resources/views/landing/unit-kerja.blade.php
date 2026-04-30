<!doctype html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
  <!--begin::Head-->
  @include('landing.parts.head')

  <!--end::Head-->
  <!--begin::Body-->
  <body
    id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled"
  >
    <!--begin::Theme mode setup on page load-->
    <script>
      var defaultThemeMode = "light";
      var themeMode;
      if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
          themeMode =
            document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
          if (localStorage.getItem("data-bs-theme") !== null) {
            themeMode = localStorage.getItem("data-bs-theme");
          } else {
            themeMode = defaultThemeMode;
          }
        }
        if (themeMode === "system") {
          themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
      }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
          <!--begin::Header-->
          <div
            id="kt_header"
            class="header align-items-stretch mb-5 mb-lg-10"
            data-kt-sticky="true"
            data-kt-sticky-name="header"
            data-kt-sticky-offset="{default: '200px', lg: '300px'}"
          >
            <!--begin::Container-->
            <div class="container-xxl d-flex align-items-center">
              <!--begin::Heaeder menu toggle-->
              <div
                class="d-flex topbar align-items-center d-lg-none ms-n2 me-3"
                title="Show aside menu"
              >
                <div
                  class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px"
                  id="kt_header_menu_mobile_toggle"
                >
                  <i class="ki-duotone ki-abstract-14 fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>
                </div>
              </div>
              <!--end::Heaeder menu toggle-->
              <!--begin::Header Logo-->
              <div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
                <a href="../../demo2/dist/index.html">
                  <img
                    alt="Logo"
                    src="assets/media/logos/demo2.png"
                    class="logo-default h-25px"
                  />
                  <img
                    alt="Logo"
                    src="assets/media/logos/demo2-sticky.png"
                    class="logo-sticky h-25px"
                  />
                </a>
              </div>
              <!--end::Header Logo-->
              <!--begin::Wrapper-->
              <div
                class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
              >
                    <!--begin::Navbar-->
                    @include('landing.parts.navbar')
                    <!--end::Navbar-->
                    <!--begin::Toolbar wrapper-->
                    <div class="topbar d-flex align-items-stretch flex-shrink-0">
                        <!--begin::Search-->
                        <div class="d-flex align-items-stretch ms-1 ms-lg-3">
                            <!--begin::Search-->
                            <div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                                <!--begin::Search toggle-->
                                <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                                    <div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px">
                                        <i class="ki-duotone ki-magnifier fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Search toggle-->
                                <!--begin::Menu-->
                                <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                    <!--begin::Wrapper-->
                                    <div data-kt-search-element="wrapper">
                                        <!--begin::Form-->
                                        <form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Input-->
                                            <input type="text" class="search-input form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                                            <!--end::Input-->
                                            <!--begin::Spinner-->
                                            <span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
                                                <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                            </span>
                                            <!--end::Spinner-->
                                            <!--begin::Reset-->
                                            <span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
                                                <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                            <!--end::Reset-->
                                            <!--begin::Toolbar-->
                                            <div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
                                                <!--begin::Preferences toggle-->
                                                <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="Show search preferences">
                                                    <i class="ki-duotone ki-setting-2 fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Preferences toggle-->
                                                <!--begin::Advanced search toggle-->
                                                <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="Show more search options">
                                                    <i class="ki-duotone ki-down fs-2"></i>
                                                </div>
                                                <!--end::Advanced search toggle-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </form>
                                        <!--end::Form-->
                                        <!--begin::Separator-->
                                        <div class="separator border-gray-200 mb-6"></div>
                                        <!--end::Separator-->
                                        <!--begin::Recently viewed-->
                                        <div data-kt-search-element="results" class="d-none">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-350px">
                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
                                                <!--end::Category title-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-6.jpg" alt="" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Karina Clark</span>
                                                        <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-2.jpg" alt="" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                        <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-9.jpg" alt="" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Ana Clark</span>
                                                        <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-14.jpg" alt="" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                        <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-11.jpg" alt="" />
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                        <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
                                                <!--end::Category title-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                        <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                        <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                        <span class="fs-7 fw-semibold text-muted">Administration</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                        <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                        <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
                                                <!--end::Category title-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-notepad fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                                <span class="path5"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                                        <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-frame fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                                        <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-message-text-2 fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                                                        <span class="fs-7 fw-semibold text-muted">#21090</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-profile-circle fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                                        <span class="fs-7 fw-semibold text-muted">#34560</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Recently viewed-->
                                        <!--begin::Recently viewed-->
                                        <div class="mb-5" data-kt-search-element="main">
                                            <!--begin::Heading-->
                                            <div class="d-flex flex-stack fw-semibold mb-4">
                                                <!--begin::Label-->
                                                <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-325px">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-laptop fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                                                        <span class="fs-7 text-muted fw-semibold">#45789</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart-simple fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                                                        <span class="fs-7 text-muted fw-semibold">#84050</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                                                        <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart-line-down fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
                                                        <span class="fs-7 text-muted fw-semibold">#67945</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-sms fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
                                                        <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-bank fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                                                        <span class="fs-7 text-muted fw-semibold">#45690</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart-line-down fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                                                        <span class="fs-7 text-muted fw-semibold">#24005</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Recently viewed-->
                                        <!--begin::Empty-->
                                        <div data-kt-search-element="empty" class="text-center d-none">
                                            <!--begin::Icon-->
                                            <div class="pt-10 pb-10">
                                                <i class="ki-duotone ki-search-list fs-4x opacity-50">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Message-->
                                            <div class="pb-15 fw-semibold">
                                                <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                                <div class="text-muted fs-7">Please try again with a different query</div>
                                            </div>
                                            <!--end::Message-->
                                        </div>
                                        <!--end::Empty-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Preferences-->
                                    <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <!--begin::Radio group-->
                                            <div class="nav-group nav-group-fluid">
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="users" />
                                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="orders" />
                                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="projects" />
                                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Radio group-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <!--begin::Radio group-->
                                            <div class="nav-group nav-group-fluid">
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="attachment" value="any" />
                                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Radio group-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                                <option value="next">Within the next</option>
                                                <option value="last">Within the last</option>
                                                <option value="between">Between</option>
                                                <option value="on">On</option>
                                            </select>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-8">
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                                                    <option value="days">Days</option>
                                                    <option value="weeks">Weeks</option>
                                                    <option value="months">Months</option>
                                                    <option value="years">Years</option>
                                                </select>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                                            <a href="../../demo2/dist/pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Preferences-->
                                    <!--begin::Preferences-->
                                    <form data-kt-search-element="preferences" class="pt-1 d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="pb-4 border-bottom">
                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
                                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
                                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
                                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end pt-7">
                                            <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
                                            <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Preferences-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Search-->
                        <!--begin::Activities-->
                        <div class="d-flex align-items-center ms-1 ms-lg-3">
                            <!--begin::Drawer toggle-->
                            <div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_activities_toggle">
                                <i class="ki-duotone ki-chart-simple fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </div>
                            <!--end::Drawer toggle-->
                        </div>
                        <!--end::Activities-->
                        <!--begin::Notifications-->
                        <div class="d-flex align-items-center ms-1 ms-lg-3">
                            <!--begin::Menu- wrapper-->
                            <div class="position-relative btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-binance fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </div>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                                    <!--begin::Title-->
                                    <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
                                    <span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
                                    <!--end::Title-->
                                    <!--begin::Tabs-->
                                    <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                        </li>
                                    </ul>
                                    <!--end::Tabs-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-325px my-5 px-8">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-abstract-28 fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
                                                        <div class="text-gray-400 fs-7">Phase 1 development</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">1 hr</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-duotone ki-information fs-2 text-danger">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
                                                        <div class="text-gray-400 fs-7">Confidential staff documents</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 hrs</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-duotone ki-briefcase fs-2 text-warning">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
                                                        <div class="text-gray-400 fs-7">Corporeate staff profiles</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">5 hrs</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-duotone ki-abstract-12 fs-2 text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
                                                        <div class="text-gray-400 fs-7">New frontend admin theme</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 days</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-colors-square fs-2 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
                                                        <div class="text-gray-400 fs-7">Product launch status update</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">21 Jan</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-info">
                                                            <i class="ki-duotone ki-picture fs-2 text-info"></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
                                                        <div class="text-gray-400 fs-7">Collection of banner images</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">21 Jan</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-duotone ki-color-swatch fs-2 text-warning">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                                <span class="path5"></span>
                                                                <span class="path6"></span>
                                                                <span class="path7"></span>
                                                                <span class="path8"></span>
                                                                <span class="path9"></span>
                                                                <span class="path10"></span>
                                                                <span class="path11"></span>
                                                                <span class="path12"></span>
                                                                <span class="path13"></span>
                                                                <span class="path14"></span>
                                                                <span class="path15"></span>
                                                                <span class="path16"></span>
                                                                <span class="path17"></span>
                                                                <span class="path18"></span>
                                                                <span class="path19"></span>
                                                                <span class="path20"></span>
                                                                <span class="path21"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
                                                        <div class="text-gray-400 fs-7">Collection of SVG icons</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">20 March</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                        <!--begin::View more-->
                                        <div class="py-3 text-center border-top">
                                            <a href="../../demo2/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                            <i class="ki-duotone ki-arrow-right fs-5">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i></a>
                                        </div>
                                        <!--end::View more-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column px-9">
                                            <!--begin::Section-->
                                            <div class="pt-10 pb-0">
                                                <!--begin::Title-->
                                                <h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
                                                <!--end::Title-->
                                                <!--begin::Text-->
                                                <div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
                                                <!--end::Text-->
                                                <!--begin::Action-->
                                                <div class="text-center mt-5 mb-9">
                                                    <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-4">
                                                <img class="mw-100 mh-200px" alt="image" src="assets/media/illustrations/sigma-1/1.png" />
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-325px my-5 px-8">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Just now</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 hrs</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">5 hrs</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 days</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">1 week</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Mar 5</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">May 15</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Apr 3</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Jun 30</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Jul 10</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Sep 10</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Dec 10</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                        <!--begin::View more-->
                                        <div class="py-3 text-center border-top">
                                            <a href="../../demo2/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                            <i class="ki-duotone ki-arrow-right fs-5">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i></a>
                                        </div>
                                        <!--end::View more-->
                                    </div>
                                    <!--end::Tab panel-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Notifications-->
                        <!--begin::Chat-->
                        <div class="d-flex align-items-center ms-1 ms-lg-3">
                            <!--begin::Menu wrapper-->
                            <div class="position-relative btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_drawer_chat_toggle">
                                <i class="ki-duotone ki-message-text-2 fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Chat-->
                        <!--begin::Quick links-->
                        <div class="d-flex align-items-center ms-1 ms-lg-3">
                            <!--begin::Menu wrapper-->
                            <div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-element-11 fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </div>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                                    <!--begin::Title-->
                                    <h3 class="text-white fw-semibold mb-3">Quick Links</h3>
                                    <!--end::Title-->
                                    <!--begin::Status-->
                                    <span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending tasks</span>
                                    <!--end::Status-->
                                </div>
                                <!--end::Heading-->
                                <!--begin:Nav-->
                                <div class="row g-0">
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="../../demo2/dist/apps/projects/budget.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                            <i class="ki-duotone ki-dollar fs-3x text-primary mb-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
                                            <span class="fs-7 text-gray-400">eCommerce</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="../../demo2/dist/apps/projects/settings.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                            <i class="ki-duotone ki-sms fs-3x text-primary mb-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
                                            <span class="fs-7 text-gray-400">Console</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="../../demo2/dist/apps/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                            <i class="ki-duotone ki-abstract-41 fs-3x text-primary mb-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
                                            <span class="fs-7 text-gray-400">Pending Tasks</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="../../demo2/dist/apps/projects/users.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                            <i class="ki-duotone ki-briefcase fs-3x text-primary mb-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
                                            <span class="fs-7 text-gray-400">Latest cases</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                </div>
                                <!--end:Nav-->
                                <!--begin::View more-->
                                <div class="py-2 text-center border-top">
                                    <a href="../../demo2/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                    <i class="ki-duotone ki-arrow-right fs-5">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i></a>
                                </div>
                                <!--end::View more-->
                            </div>
                            <!--end::Menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Quick links-->
                        <!--begin::Theme mode-->
                        <div class="d-flex align-items-center ms-1 ms-lg-3">
                            <!--begin::Menu toggle-->
                            <a href="#" class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-night-day theme-light-show fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                    <span class="path8"></span>
                                    <span class="path9"></span>
                                    <span class="path10"></span>
                                </i>
                                <i class="ki-duotone ki-moon theme-dark-show fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                            <!--begin::Menu toggle-->
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-night-day fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                                <span class="path9"></span>
                                                <span class="path10"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Light</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-moon fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Dark</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-screen fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">System</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Theme mode-->

                        <!--begin::Theme mode-->
                        <div class="d-flex align-items-center ms-1 ms-lg-3">
                            <!--begin::Menu toggle-->
                            <a href="#" class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <img src="assets/media/logos/pusaka.png" alt="Icon Description" width="35">
                

                                <i class="ki-duotone ki-moon theme-dark-show fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                            <!--begin::Menu toggle-->
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-night-day fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                                <span class="path9"></span>
                                                <span class="path10"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Light</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-moon fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Dark</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-screen fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">System</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Theme mode-->

                        

                    

                        <!--begin::Aside mobile toggle-->
                        <!--end::Aside mobile toggle-->
                    </div>
                    <!--end::Toolbar wrapper-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Header-->
          <!--begin::Toolbar-->
          <div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
            <!--begin::Container-->
            <div
              id="kt_toolbar_container"
              class="container-xxl d-flex flex-stack flex-wrap"
            >
              <!--begin::Page title-->
              <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bold my-1 fs-3">Unit Kerja</h1>
                <!--end::Title-->
              </div>
              <!--end::Page title-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Toolbar-->
          <!--begin::Container-->
          <div
            id="kt_content_container"
            class="d-flex flex-column-fluid align-items-start container-xxl"
          >
            <!--begin::Post-->
            <div class="content flex-row-fluid" id="kt_content">
              <!--begin::Row-->
              <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-12">
                  <!--begin::Card widget 15-->
                  <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body py-9">
                      <!--begin::Row-->
                      <div class="row gx-9 h-100">
                        <!--begin::Col-->
                        <div class="col-sm-6 mb-10 mb-sm-0">
                          <!--begin::Overlay-->
                          <a
                            class="d-block overlay h-100"
                            data-fslightbox="lightbox-hot-sales"
                            href="assets/media/stock/600x600/img-42.jpg"
                          >
                            <!--begin::Image-->
                            <div
                              class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-200px h-100"
                              style="
                                background-image: url(&quot;assets/media/ptsp/kantor.jpeg&quot;);
                              "
                            ></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div
                              class="overlay-layer card-rounded bg-dark bg-opacity-25"
                            >
                              <i class="ki-duotone ki-eye fs-3x text-white">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                              </i>
                            </div>
                            <!--end::Action-->
                          </a>
                          <!--end::Overlay-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-6">
                          <!--begin::Mixed Widget 2-->
                          <div class="card card-xl-stretch">
                            <!--begin::Header-->

                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body p-0 mt-10">
                              <!--begin::Stats-->
                              <div class="card-p mt-n20 position-relative">
                                <!--begin::Row-->
                                <div class="row g-0">
                                  <!--begin::Col-->
                                  <div
                                    class="col-lg-12 d-flex flex-column bg-light-success px-6 py-8 rounded-2 me-7 mb-7"
                                  >
                                    <a
                                      href="#"
                                      class="text-success fw-semibold fs-6"
                                    >
                                      <h1 class="text-success">8</h1>
                                      Kantor Urusan Agama</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                </div>
                                <div class="row g-0">
                                  <!--begin::Col-->
                                  <div
                                    class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7 me-1"
                                  >
                                    <a
                                      href="#"
                                      class="text-primary fw-semibold fs-6"
                                      ><h1 class="text-primary">4</h1>
                                      Raudatul Athfal</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                  <!--begin::Col-->
                                  <div
                                    class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7 me-1"
                                  >
                                    <a
                                      href="#"
                                      class="text-primary fw-semibold fs-6"
                                      ><h1 class="text-primary">8</h1>
                                      Madrasah Ibtidaiyah</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                  <!--begin::Col-->
                                  <div
                                    class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7 me-1"
                                  >
                                    <a
                                      href="#"
                                      class="text-primary fw-semibold fs-6"
                                    >
                                      <h1 class="text-primary">4</h1>
                                      Madrasah Tsanawiyah</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                  <!--begin::Col-->
                                  <div
                                    class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7"
                                  >
                                    <a
                                      href="#"
                                      class="text-primary fw-semibold fs-6"
                                      ><h1 class="text-primary">1</h1>
                                      Madrasah Aliyah</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                  <!--begin::Col-->
                                  <div
                                    class="col d-flex flex-column bg-light-warning px-6 py-8 rounded-2 me-7"
                                  >
                                    <a
                                      href="#"
                                      class="text-warning fw-semibold fs-6 mt-2"
                                      ><h1 class="text-warning">2</h1>
                                      SMPTK</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                  <!--begin::Col-->
                                  <div
                                    class="col d-flex flex-column bg-light-warning px-6 py-8 rounded-2"
                                  >
                                    <a
                                      href="#"
                                      class="text-warning fw-semibold fs-6 mt-2"
                                      ><h1 class="text-warning">2</h1>
                                      SMTK</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                </div>
                                <!--end::Row-->
                              </div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Body-->
                          </div>
                          <!--end::Mixed Widget 2-->
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Card widget 15-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-3 col-xxl-3">
                  <!--begin::Card widget 14-->
                  <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body text-center pb-5">
                      <!--begin::Overlay-->
                      <a
                        class="d-block overlay"
                        data-fslightbox="lightbox-hot-sales"
                        href="assets/media/stock/600x600/img-39.jpg"
                      >
                        <!--begin::Image-->
                        <div
                          class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                          style="height: 266px;background-image:url('assets/media/stock/600x600/img-39.jpg"
                        ></div>
                        <!--end::Image-->
                        <!--begin::Action-->
                        <div
                          class="overlay-layer card-rounded bg-dark bg-opacity-25"
                        >
                          <i class="ki-duotone ki-eye fs-3x text-white">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                          </i>
                        </div>
                        <!--end::Action-->
                      </a>
                      <!--end::Overlay-->
                      <!--begin::Info-->
                      <div class="d-flex align-items-end flex-stack mb-1">
                        <!--begin::Title-->
                        <div class="text-start">
                          <span
                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block"
                            >Wavy Curved Art</span
                          >
                          <span class="text-gray-400 mt-1 fw-bold fs-6"
                            >Last Bid: 1.07 ETH</span
                          >
                        </div>
                        <!--end::Title-->
                        <!--begin::Total-->
                        <span class="text-gray-600 text-end fw-bold fs-6"
                          >$2,630</span
                        >
                        <!--end::Total-->
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex flex-stack pt-0">
                      <!--begin::Link-->
                      <a
                        class="btn btn-sm btn-primary flex-shrink-0 me-2"
                        data-bs-target="#kt_modal_bidding"
                        data-bs-toggle="modal"
                        >Place a Bid</a
                      >
                      <!--end::Link-->
                      <!--begin::Link-->
                      <a
                        class="btn btn-sm btn-light flex-shrink-0"
                        href="../../demo2/dist/apps/ecommerce/sales/listing.html"
                        >View Item</a
                      >
                      <!--end::Link-->
                    </div>
                    <!--end::Footer-->
                  </div>
                  <!--end::Card widget 14-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-3 col-xxl-3">
                  <!--begin::Card widget 14-->
                  <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body text-center pb-5">
                      <!--begin::Overlay-->
                      <a
                        class="d-block overlay"
                        data-fslightbox="lightbox-hot-sales"
                        href="assets/media/stock/600x600/img-47.jpg"
                      >
                        <!--begin::Image-->
                        <div
                          class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                        ></div>
                        <!--end::Image-->
                        <!--begin::Action-->
                        <div
                          class="overlay-layer card-rounded bg-dark bg-opacity-25"
                        >
                          <i class="ki-duotone ki-eye fs-3x text-white">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                          </i>
                        </div>
                        <!--end::Action-->
                      </a>
                      <!--end::Overlay-->
                      <!--begin::Info-->
                      <div class="d-flex align-items-end flex-stack mb-1">
                        <!--begin::Title-->
                        <div class="text-start">
                          <span
                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block"
                            >Happy Kitty Art</span
                          >
                          <span class="text-gray-400 mt-1 fw-bold fs-6"
                            >Last Bid: 7.83 ETH</span
                          >
                        </div>
                        <!--end::Title-->
                        <!--begin::Total-->
                        <span class="text-gray-600 text-end fw-bold fs-6"
                          >$17,035</span
                        >
                        <!--end::Total-->
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex flex-stack pt-0">
                      <!--begin::Link-->
                      <a
                        class="btn btn-sm btn-primary flex-shrink-0 me-2"
                        data-bs-target="#kt_modal_bidding"
                        data-bs-toggle="modal"
                        >Place a Bid</a
                      >
                      <!--end::Link-->
                      <!--begin::Link-->
                      <a
                        class="btn btn-sm btn-light flex-shrink-0"
                        href="../../demo2/dist/apps/ecommerce/sales/listing.html"
                        >View Item</a
                      >
                      <!--end::Link-->
                    </div>
                    <!--end::Footer-->
                  </div>
                  <!--end::Card widget 14-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-3 col-xxl-3">
                  <!--begin::Card widget 14-->
                  <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body text-center pb-5">
                      <!--begin::Overlay-->
                      <a
                        class="d-block overlay"
                        data-fslightbox="lightbox-hot-sales"
                        href="assets/media/stock/600x600/img-39.jpg"
                      >
                        <!--begin::Image-->
                        <div
                          class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                          style="height: 266px; background-image: url('assets/media/stock/600x600/img-39.jpg');"
                        ></div>
                        <!--end::Image-->
                        <!--begin::Action-->
                        <div
                          class="overlay-layer card-rounded bg-dark bg-opacity-25"
                        >
                          <i class="ki-duotone ki-eye fs-3x text-white">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                          </i>
                        </div>
                        <!--end::Action-->
                      </a>
                      <!--end::Overlay-->
                      <!--begin::Info-->
                      <div class="d-flex align-items-end flex-stack mb-1">
                        <!--begin::Title-->
                        <div class="text-start">
                          <span
                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block"
                            >Wavy Curved Art</span
                          >
                          <span class="text-gray-400 mt-1 fw-bold fs-6"
                            >Last Bid: 1.07 ETH</span
                          >
                        </div>
                        <!--end::Title-->
                        <!--begin::Total-->
                        <span class="text-gray-600 text-end fw-bold fs-6"
                          >$2,630</span
                        >
                        <!--end::Total-->
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex flex-stack pt-0">
                      <!--begin::Link-->
                      <a
                        class="btn btn-sm btn-primary flex-shrink-0 me-2"
                        data-bs-target="#kt_modal_bidding"
                        data-bs-toggle="modal"
                        >Place a Bid</a
                      >
                      <!--end::Link-->
                      <!--begin::Link-->
                      <a
                        class="btn btn-sm btn-light flex-shrink-0"
                        href="../../demo2/dist/apps/ecommerce/sales/listing.html"
                        >View Item</a
                      >
                      <!--end::Link-->
                    </div>
                    <!--end::Footer-->
                  </div>
                  <!--end::Card widget 14-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-3 col-xxl-3">
                  <!--begin::Card widget 14-->
                  <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body text-center pb-5">
                      <!--begin::Overlay-->
                      <a
                        class="d-block overlay"
                        data-fslightbox="lightbox-hot-sales"
                        href="assets/media/stock/600x600/img-47.jpg"
                      >
                        <!--begin::Image-->
                        <div
                          class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7"
                          style="
                            height: 266px;
                            background-image: url(&quot;assets/media/stock/600x600/img-47.jpg&quot;);
                          "
                        ></div>
                        <!--end::Image-->
                        <!--begin::Action-->
                        <div
                          class="overlay-layer card-rounded bg-dark bg-opacity-25"
                        >
                          <i class="ki-duotone ki-eye fs-3x text-white">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                          </i>
                        </div>
                        <!--end::Action-->
                      </a>
                      <!--end::Overlay-->
                      <!--begin::Info-->
                      <div class="d-flex align-items-end flex-stack mb-1">
                        <!--begin::Title-->
                        <div class="text-start">
                          <span
                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block"
                            >Happy Kitty Art</span
                          >
                          <span class="text-gray-400 mt-1 fw-bold fs-6"
                            >Last Bid: 7.83 ETH</span
                          >
                        </div>
                        <!--end::Title-->
                        <!--begin::Total-->
                        <span class="text-gray-600 text-end fw-bold fs-6"
                          >$17,035</span
                        >
                        <!--end::Total-->
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex flex-stack pt-0">
                      <!--begin::Link-->
                      <a
                        class="btn btn-sm btn-primary flex-shrink-0 me-2"
                        data-bs-target="#kt_modal_bidding"
                        data-bs-toggle="modal"
                        >Place a Bid</a
                      >
                      <!--end::Link-->
                      <!--begin::Link-->
                      <a
                        class="btn btn-sm btn-light flex-shrink-0"
                        href="../../demo2/dist/apps/ecommerce/sales/listing.html"
                        >View Item</a
                      >
                      <!--end::Link-->
                    </div>
                    <!--end::Footer-->
                  </div>
                  <!--end::Card widget 14-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Row-->
              <div class="row">

              </div>

              <!--begin::Documents toolbar-->
              <div class="d-flex flex-wrap flex-stack mb-6">
                <!--begin::Title-->
                <h3 class="fw-bold my-2">
                  Raudatul Athfal
                  <span class="fs-6 text-gray-400 fw-semibold ms-1">4</span>
                </h3>
                <!--end::Title-->
                <!--begin::Controls-->
                <div class="d-flex my-2">
                  <!--begin::Search-->
                  <div class="d-flex align-items-center position-relative me-4">
                    <i
                      class="ki-duotone ki-magnifier fs-3 position-absolute ms-3"
                    >
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>
                    <input
                      type="text"
                      id="kt_filter_search"
                      class="form-control form-control-sm border-body bg-body w-150px ps-10"
                      placeholder="Search"
                    />
                  </div>
                  <!--end::Search-->
                  <a
                    href="../../demo2/dist/apps/file-manager/files.html"
                    class="btn btn-primary btn-sm"
                    >File Manager</a
                  >
                </div>
                <!--end::Controls-->
              </div>
              <!--end::Documents toolbar-->
              <!--begin::Row-->
              <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">RA YAPPI WAINGAPU</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">Waingapu</div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">RA AT-TAQWA</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">
                        Kamalaputi
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">RA AL MUKMIN</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">Melolo</div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">RA IT CERDAS CERIA</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">
                        Kamalaputi
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
              </div>
              <!--end:Row-->

              <!--begin::Documents toolbar-->
              <div class="d-flex flex-wrap flex-stack mb-6">
                <!--begin::Title-->
                <h3 class="fw-bold my-2">
                  Madrasah Ibtidaiyah
                  <span class="fs-6 text-gray-400 fw-semibold ms-1">4</span>
                </h3>
                <!--end::Title-->
                <!--begin::Controls-->
                <div class="d-flex my-2">
                  <!--begin::Search-->
                  <div class="d-flex align-items-center position-relative me-4">
                    <i
                      class="ki-duotone ki-magnifier fs-3 position-absolute ms-3"
                    >
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>
                    <input
                      type="text"
                      id="kt_filter_search"
                      class="form-control form-control-sm border-body bg-body w-150px ps-10"
                      placeholder="Search"
                    />
                  </div>
                  <!--end::Search-->
                  <a
                    href="../../demo2/dist/apps/file-manager/files.html"
                    class="btn btn-primary btn-sm"
                    >File Manager</a
                  >
                </div>
                <!--end::Controls-->
              </div>
              <!--end::Documents toolbar-->

              <!-- begin MI -->

              <!--begin::Row-->
              <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MIN 1 SUMBA TIMUR</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">Waingapu</div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MIN 2 SUMBA TIMUR</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">
                        Kamalaputi
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MIN 3 SUMBA TIMUR</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">Melolo</div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MIS WAINGAPU</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">
                        Kamalaputi
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
              </div>
              <!--end:Row-->
              <!--begin::Row-->
              <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MIS LEWA</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">Waingapu</div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MIS AL-JIHAD</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">
                        Kamalaputi
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MIS INSAN ROBBANI</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">Melolo</div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MIS AL-MUHAJIRIN</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">
                        Kamalaputi
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
              </div>
              <!--end:Row-->

              <!-- end MI -->

              <!--begin::Documents toolbar-->
              <div class="d-flex flex-wrap flex-stack mb-6">
                <!--begin::Title-->
                <h3 class="fw-bold my-2">
                  Madrasah Tsanawiyah
                  <span class="fs-6 text-gray-400 fw-semibold ms-1">4</span>
                </h3>
                <!--end::Title-->
                <!--begin::Controls-->
                <div class="d-flex my-2">
                  <!--begin::Search-->
                  <div class="d-flex align-items-center position-relative me-4">
                    <i
                      class="ki-duotone ki-magnifier fs-3 position-absolute ms-3"
                    >
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>
                    <input
                      type="text"
                      id="kt_filter_search"
                      class="form-control form-control-sm border-body bg-body w-150px ps-10"
                      placeholder="Search"
                    />
                  </div>
                  <!--end::Search-->
                  <a
                    href="../../demo2/dist/apps/file-manager/files.html"
                    class="btn btn-primary btn-sm"
                    >File Manager</a
                  >
                </div>
                <!--end::Controls-->
              </div>
              <!--end::Documents toolbar-->
              
              <!--begin::Row-->
              <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MTSN SUMBA TIMUR</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">Waingapu</div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MTs 2 AL ISTIQOMAH</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">
                        Melolo
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MTs AL MUHAJIRIN</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">Tanaraing</div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MTs NURUL AL FIQRI</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">
                        Lewa
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
              </div>
              <!--end:Row-->

              <!--begin::Documents toolbar-->
              <div class="d-flex flex-wrap flex-stack mb-6">
                <!--begin::Title-->
                <h3 class="fw-bold my-2">
                  Madrasah Aliyah
                  <span class="fs-6 text-gray-400 fw-semibold ms-1">4</span>
                </h3>
                <!--end::Title-->
                <!--begin::Controls-->
                <div class="d-flex my-2">
                  <!--begin::Search-->
                  <div class="d-flex align-items-center position-relative me-4">
                    <i
                      class="ki-duotone ki-magnifier fs-3 position-absolute ms-3"
                    >
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>
                    <input
                      type="text"
                      id="kt_filter_search"
                      class="form-control form-control-sm border-body bg-body w-150px ps-10"
                      placeholder="Search"
                    />
                  </div>
                  <!--end::Search-->
                  <a
                    href="../../demo2/dist/apps/file-manager/files.html"
                    class="btn btn-primary btn-sm"
                    >File Manager</a
                  >
                </div>
                <!--end::Controls-->
              </div>
              <!--end::Documents toolbar-->
              
              <!--begin::Row-->
              <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-6">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MAS WAINGAPU</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">Waingapu</div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-6">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">MAS SAFINATUNNAJAH</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">
                        Salura
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
               
              </div>
              <!--end:Row-->

              <!--begin::Documents toolbar-->
              <div class="d-flex flex-wrap flex-stack mb-6">
                <!--begin::Title-->
                <h3 class="fw-bold my-2">
                  SMP Kristen
                  <span class="fs-6 text-gray-400 fw-semibold ms-1">4</span>
                </h3>
                <!--end::Title-->
                <!--begin::Controls-->
                <div class="d-flex my-2">
                  <!--begin::Search-->
                  <div class="d-flex align-items-center position-relative me-4">
                    <i
                      class="ki-duotone ki-magnifier fs-3 position-absolute ms-3"
                    >
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>
                    <input
                      type="text"
                      id="kt_filter_search"
                      class="form-control form-control-sm border-body bg-body w-150px ps-10"
                      placeholder="Search"
                    />
                  </div>
                  <!--end::Search-->
                  <a
                    href="../../demo2/dist/apps/file-manager/files.html"
                    class="btn btn-primary btn-sm"
                    >File Manager</a
                  >
                </div>
                <!--end::Controls-->
              </div>
              <!--end::Documents toolbar-->
              
              <!--begin::Row-->
              <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-6">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">SMPTK HANGGORURU</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">Waingapu</div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-6">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">SMPTK SATAP</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">
                        Salura
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
               
              </div>
              <!--end:Row-->

              <!--begin::Documents toolbar-->
              <div class="d-flex flex-wrap flex-stack mb-6">
                <!--begin::Title-->
                <h3 class="fw-bold my-2">
                  SMA Kristen
                  <span class="fs-6 text-gray-400 fw-semibold ms-1">4</span>
                </h3>
                <!--end::Title-->
               
              </div>
              <!--end::Documents toolbar-->
              
              <!--begin::Row-->
              <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-6">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">SMAKN SUMBA TIMUR</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">Waingapu</div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-6">
                  <!--begin::Card-->
                  <div class="card h-100">
                    <!--begin::Card body-->
                    <div
                      class="card-body d-flex justify-content-center text-center flex-column p-8"
                    >
                      <!--begin::Name-->
                      <a
                        href="../../demo2/dist/apps/file-manager/files.html"
                        class="text-gray-800 text-hover-primary d-flex flex-column"
                      >
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-light-show"
                            alt=""
                          />
                          <img
                            src="assets/media/logos/logok.png"
                            class="theme-dark-show"
                            alt=""
                          />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">SMTK BETHEL WAINGAPU</div>
                        <!--end::Title-->
                      </a>
                      <!--end::Name-->
                      <!--begin::Description-->
                      <div class="fs-7 fw-semibold text-gray-400">
                        Salura
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Col-->
               
              </div>
              <!--end:Row-->


              
            </div>
            <!--end::Post-->
          </div>

          <!--end::Container-->

         
          <!--begin::Footer Section-->
					@include('landing.parts.footer')
                    <!--end::Footer Section-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Page-->
    </div>
    <!--end::Root-->

    @include('landing.parts.bottom')
    <!--begin::Modals-->
    
    <!--end::Modals-->
    <!--begin::Javascript-->
    @include('landing.parts.js')
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>
