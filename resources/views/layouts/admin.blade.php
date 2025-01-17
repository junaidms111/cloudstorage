
<!doctype html>
<html lang="en">
  
<!-- Mirrored from templates.iqonic.design/cloudbox/html/backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 05:19:07 GMT -->
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>CloudBOX | Responsive Bootstrap 4 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href=" {{asset('/images/favicon.ico')}}" />
      
      <link rel="stylesheet" href=" {{asset('/css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href=" {{asset('/css/backende209.css?v=1.0.0')}}">
      
      <link rel="stylesheet" href=" {{asset('/vendor/%40fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href=" {{asset('/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css"')}}>
      <link rel="stylesheet" href=" {{asset('/vendor/remixicon/fonts/remixicon.css"')}}>
      
      <!-- Viewer Plugin -->
        <!--PDF-->
        <link rel="stylesheet" href=" {{ asset('/vendor/doc-viewer/include/pdf/pdf.viewer.css"') }}>
        <!--Docs-->
        <!--PPTX-->
        <link rel="stylesheet" href=" {{asset('/vendor/doc-viewer/include/PPTXjs/css/pptxjs.css')}}">
        <link rel="stylesheet" href=" {{asset('/vendor/doc-viewer/include/PPTXjs/css/nv.d3.min.css')}}">
        <!--All Spreadsheet -->
        <link rel="stylesheet" href=" {{asset('/vendor/doc-viewer/include/SheetJS/handsontable.full.min.css')}}">
        <!--Image viewer-->
        <link rel="stylesheet" href=" {{asset('/vendor/doc-viewer/include/verySimpleImageViewer/css/jquery.verySimpleImageViewer.css')}}">
        <!--officeToHtml-->
        <link rel="stylesheet" href=" {{asset('/vendor/doc-viewer/include/officeToHtml/officeToHtml.css')}}">  
        <!--LineAwesome-->
        <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css" >

        <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
        
    
    </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        
        @yield('content')
    
    </div>
              <div class="p-3"></div>
          </div>
          </div>       
          <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
              <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                  <i class="ri-menu-line wrapper-menu"></i>
                  <a href="index.html" class="header-logo">
                      <img src=" {{asset('/images/logo.png')}}" class="img-fluid rounded-normal light-logo" alt="logo">
                      <img src=" {{asset('/images/logo-white.png')}}" class="img-fluid rounded-normal darkmode-logo" alt="logo">
                  </a>
              </div>
                  <div class="iq-search-bar device-search">
                      
                      <form>
                          <div class="input-prepend input-append">
                              <div class="btn-group">
                                  <label class="dropdown-toggle searchbox" data-toggle="dropdown">
                                  <input class="dropdown-toggle search-query text search-input" type="text"  placeholder="Type here to search..."><span class="search-replace"></span>
                                  <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                  <span class="caret"><!--icon--></span>
                                  </label>
                                  <ul class="dropdown-menu">
                                      <li><a href="#"><div class="item"><i class="far fa-file-pdf bg-info"></i>PDFs</div></a></li>
                                      <li><a href="#"><div class="item"><i class="far fa-file-alt bg-primary"></i>Documents</div></a></li>
                                      <li><a href="#"><div class="item"><i class="far fa-file-excel bg-success"></i>Spreadsheet</div></a></li>
                                      <li><a href="#"><div class="item"><i class="far fa-file-powerpoint bg-danger"></i>Presentation</div></a></li>
                                      <li><a href="#"><div class="item"><i class="far fa-file-image bg-warning"></i>Photos & Images</div></a></li>
                                      <li><a href="#"><div class="item"><i class="far fa-file-video bg-info"></i>Videos</div></a></li>
                                  </ul>
                              </div>
                          </div>
                      </form>
                  </div>
      
                  <div class="d-flex align-items-center">
                      <div class="change-mode">
                          <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                              <div class="custom-switch-inner">
                                  <p class="mb-0"> </p>
                                  <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                  <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                      <span class="switch-icon-left"><i class="a-left"></i></span>
                                      <span class="switch-icon-right"><i class="a-right"></i></span>
                                  </label>
                              </div>
                          </div>
                      </div>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                      <i class="ri-menu-3-line"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                          <li class="nav-item nav-icon search-content">
                              <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="ri-search-line"></i>
                              </a>
                              <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                  <form action="#" class="searchbox p-2">
                                      <div class="form-group mb-0 position-relative">
                                      <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                      <a href="#" class="search-link"><i class="las la-search"></i></a> 
                                      </div>
                                  </form>
                              </div>
                          </li> 
                          <li class="nav-item nav-icon dropdown">
                              <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="ri-question-line"></i>
                              </a>
                              <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton01">
                                  <div class="card shadow-none m-0">
                                      <div class="card-body p-0 ">
                                          <div class="p-3">
                                              <a href="#" class="iq-sub-card pt-0"><i class="ri-questionnaire-line"></i>Help</a>
                                              <a href="#" class="iq-sub-card"><i class="ri-recycle-line"></i>Training</a>
                                              <a href="#" class="iq-sub-card"><i class="ri-refresh-line"></i>Updates</a>
                                              <a href="#" class="iq-sub-card"><i class="ri-service-line"></i>Terms and Policy</a>
                                              <a href="#" class="iq-sub-card"><i class="ri-feedback-line"></i>Send Feedback</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="nav-item nav-icon dropdown"> 
                              <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                              <i class="ri-settings-3-line"></i>
                              </a>
                              <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton02">
                                  <div class="card shadow-none m-0">
                                      <div class="card-body p-0 ">
                                          <div class="p-3">
                                              <a href="#" class="iq-sub-card pt-0"><i class="ri-settings-3-line"></i> Settings</a>
                                              <a href="#" class="iq-sub-card"><i class="ri-hard-drive-line"></i> Get Drive for desktop</a>
                                              <a href="#" class="iq-sub-card"><i class="ri-keyboard-line"></i> Keyboard Shortcuts</a>
                                          </div>                                
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="nav-item nav-icon dropdown caption-content">
                              <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                  <div class="caption bg-primary line-height">P</div>
                              </a>
                              <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton03">
                                  <div class="card mb-0">
                                      <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                      <div class="header-title">
                                          <h4 class="card-title mb-0">Profile</h4>
                                      </div>
                                      <div class="close-data text-right badge badge-primary cursor-pointer "><i class="ri-close-fill"></i></div>
                                      </div>
                                      <div class="card-body">
                                          <div class="profile-header">
                                              <div class="cover-container text-center">
                                                  <div class="rounded-circle profile-icon bg-primary mx-auto d-block">
                                                      P                                                    
                                                      <a href="#">
                                                          
                                                      </a>
                                                  </div>
                                                  <div class="profile-detail mt-3">
                                                  <h5><a href="https://templates.iqonic.design/cloudbox/html/app/user-profile-edit.html">Panny Marco</a></h5>
                                                  <p>pannymarco@gmail.com</p>
                                                  </div>
                                                  <a href="auth-sign-in.html" class="btn btn-primary">Sign Out</a>
                                              </div>
                                              <div class="profile-details mt-4 pt-4 border-top">
                                                  <div class="media align-items-center mb-3">
                                                      <div class="rounded-circle iq-card-icon-small bg-primary">
                                                          A
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="media justify-content-between">
                                                              <h6 class="mb-0">Anna Mull</h6>
                                                              <p class="mb-0 font-size-12"><i>Signed Out</i></p>
                                                          </div>
                                                          <p class="mb-0 font-size-12">annamull@gmail.com</p>
                                                      </div>                                                 
                                                  </div>
                                                  <div class="media align-items-center mb-3">
                                                      <div class="rounded-circle iq-card-icon-small bg-success">
                                                          K
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="media justify-content-between">
                                                              <h6 class="mb-0">King Poilin</h6>
                                                              <p class="mb-0 font-size-12"><i>Signed Out</i></p>
                                                          </div>
                                                          <p class="mb-0 font-size-12">kingpoilin@gmail.com</p>
                                                      </div>
                                                  </div>
                                                  <div class="media align-items-center">
                                                      <div class="rounded-circle iq-card-icon-small bg-danger">
                                                          D
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="media justify-content-between">
                                                              <h6 class="mb-0">Devid Worner</h6>
                                                              <p class="mb-0 font-size-12"><i>Signed Out</i></p>
                                                          </div>
                                                          <p class="mb-0 font-size-12">devidworner@gmail.com</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          </ul>                     
                      </div> 
                  </div>
              </nav>
          </div>
      </div>
      <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-transparent card-block card-stretch card-height mb-3">
                        <div class="d-flex justify-content-between">                             
                            <div class="select-dropdown input-prepend input-append">
                                <div class="btn-group">
                                    <div data-toggle="dropdown">
                                    <div class="dropdown-toggle search-query" onclick="myFunction()">My Drive<i class="las la-angle-down ml-3"></i></div><span class="search-replace"></span>
                                    <span class="caret"><!--icon--></span>
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li><div class="item"><i class="ri-folder-add-line pr-3"></i>New Folder</div></li>
                                        <li><div class="item"><i class="ri-file-upload-line pr-3"></i>Upload Files</div></li>
                                        <li><div class="item"><i class="ri-folder-upload-line pr-3"></i>Upload Folders</div></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dashboard1-dropdown d-flex align-items-center">
                                <div class="dashboard1-info">
                                    <a href="#calander" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul id="calander" class="iq-dropdown collapse list-inline m-0 p-0 mt-2">
                                        <li class="mb-2">
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Calander"><i
                                                    class="las la-calendar iq-arrow-left"></i></a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Keep"><i
                                                    class="las la-lightbulb iq-arrow-left"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Tasks"><i
                                                    class="las la-tasks iq-arrow-left"></i></a>
                                        </li>                                        
                                    </ul>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card card-block card-stretch card-height iq-welcome" style="background: url(../assets/images/layouts/mydrive/background.png) no-repeat scroll right center; background-color: #ffffff; background-size: contain;">
                        <div class="card-body property2-content">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="col-lg-6 col-sm-6 p-0">
                                    <h3 class="mb-3">Welcome Penny</h3>
                                    <p class="mb-5">You have 32 new notifications and 23 unread messages to reply</p>
                                    <a href="#">Try Now<i class="las la-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Quick Access</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline p-0 mb-0 row align-items-center">
                                <li class="col-lg-6 col-sm-6 mb-3 mb-sm-0"> 
                                    <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal" data-target="#exampleModal" data-title="Product-planning.pdf" style="cursor: pointer;" class="p-2 text-center border rounded">
                                        <div>
                                            <img src="../assets/images/layouts/mydrive/folder-1.png" class="img-fluid mb-1" alt="image1">
                                        </div>
                                        <p class="mb-0">Planning</p>
                                    </div>
                                </li>
                                <li class="col-lg-6 col-sm-6"> 
                                    <div data-load-file="file" data-load-target="#resolte-contaniner" data-url=" {{asset('/vendor/doc-viewer/files/demo.docx')}}" data-toggle="modal" data-target="#exampleModal" data-title="Wireframe.docx" style="cursor: pointer;" class="p-2 text-center border rounded">
                                        <div> 
                                            <img src=" {{asset('/images/layouts/mydrive/folder-2.png')}}" class="img-fluid mb-1" alt="image2">
                                        </div>
                                        <p class="mb-0">Wireframe</p>
                                    </div>
             
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>                             
                <div class="col-lg-12">
                    <div class="card card-block card-stretch card-transparent ">
                        <div class="card-header d-flex justify-content-between pb-0">
                            <div class="header-title">
                                <h4 class="card-title">Documents</h4>
                            </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <a href="page-folders.html" class=" view-more">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body image-thumb">
                            <a href="#" data-title="Terms.pdf" data-load-file="file" data-load-target="#resolte-contaniner" data-url=" {{asset('/vendor/doc-viewer/files/demo.pdf') }}" data-toggle="modal" data-target="#exampleModal">
                                <div class="mb-4 text-center p-3 rounded iq-thumb"> 
                                    <div class="iq-image-overlay"></div>
                                    <img src="../assets/images/layouts/page-1/pdf.png" class="img-fluid" alt="image1">       
                                </div>
                                <h6>Terms.pdf</h6> 
                            </a>             
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body image-thumb">
                            <a href="#" data-title="New-one.docx" data-load-file="file" data-load-target="#resolte-contaniner" data-url=" {{asset('/vendor/doc-viewer/files/demo.docx')}}" data-toggle="modal" data-target="#exampleModal">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="../assets/images/layouts/page-1/doc.png" class="img-fluid" alt="image1">
                            </div>
                            <h6>New-one.docx</h6>  
                            </a>   
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body image-thumb">
                            <a href="#" data-title="Woo-box.xlsx" data-load-file="file" data-load-target="#resolte-contaniner"  data-url=" {{asset('/vendor/doc-viewer/files/demo.xlsx')}}" data-toggle="modal" data-target="#exampleModal">
                                <div class="mb-4 text-center p-3 rounded iq-thumb">
                                    <div class="iq-image-overlay"></div>
                                    <img src=" {{asset('/images/layouts/page-1/xlsx.png')}}" class="img-fluid" alt="image1">
                                </div>
                                <h6>Woo-box.xlsx</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body image-thumb doc-text">
                            <a href="#" data-title="IOS-content.pptx" data-load-file="file" data-load-target="#resolte-contaniner" data-url=" {{asset('/vendor/doc-viewer/files/demo.pptx')}}" data-toggle="modal" data-target="#exampleModal">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="../assets/images/layouts/page-1/ppt.png" class="img-fluid" alt="image1">      
                            </div>
                            <h6>IOS-content.pptx</h6>   
                            </a>       
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-block card-stretch card-transparent">
                        <div class="card-header d-flex justify-content-between pb-0">
                            <div class="header-title">
                                <h4 class="card-title">Folders</h4>
                            </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg btn bg-white" id="dropdownMenuButton1"
                                        data-toggle="dropdown">
                                        Name<i class="ri-arrow-down-s-line ml-1"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right shadow-none"
                                        aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item" href="#">Last modified</a>
                                        <a class="dropdown-item" href="#">Last modifiedby me</a>
                                        <a class="dropdown-item" href="#">Last opened by me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">                            
                                <div class="d-flex justify-content-between">
                                    <a href="page-alexa.html" class="folder">
                                        <div class="icon-small bg-danger rounded mb-4">
                                            <i class="ri-file-copy-line"></i>
                                        </div>
                                    </a>
                                    <div class="card-header-toolbar">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                                                <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="page-alexa.html" class="folder">
                                    <h5 class="mb-2">Alexa Workshop</h5>
                                    <p class="mb-2"><i class="lar la-clock text-danger mr-2 font-size-20"></i> 10 Dec, 2020</p>
                                    <p class="mb-0"><i class="las la-file-alt text-danger mr-2 font-size-20"></i> 08 Files</p>
                                </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <a href="page-android.html" class="folder">
                                    <div class="icon-small bg-primary rounded mb-4">
                                        <i class="ri-file-copy-line"></i>
                                    </div>
                                </a>
                                <div class="card-header-toolbar">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton3" data-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton3">
                                            <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                            <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="page-android.html" class="folder">
                                <h5 class="mb-2">Android</h5>
                                <p class="mb-2"><i class="lar la-clock text-primary mr-2 font-size-20"></i> 09 Dec, 2020</p>
                                <p class="mb-0"><i class="las la-file-alt text-primary mr-2 font-size-20"></i> 08 Files</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <a href="page-brightspot.html" class="folder">
                                    <div class="icon-small bg-info rounded mb-4">
                                        <i class="ri-file-copy-line"></i>
                                    </div>
                                </a>
                                <div class="card-header-toolbar">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4">
                                            <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                            <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="page-brightspot.html" class="folder">
                                <h5 class="mb-2">Brightspot</h5>
                                <p class="mb-2"><i class="lar la-clock text-info mr-2 font-size-20"></i> 07 Dec, 2020</p>
                                <p class="mb-0"><i class="las la-file-alt text-info mr-2 font-size-20"></i> 08 Files</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <a href="page-ionic.html" class="folder">
                                    <div class="icon-small bg-success rounded mb-4">
                                        <i class="ri-file-copy-line"></i>
                                    </div>
                                </a>
                                <div class="card-header-toolbar">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton5" data-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                            <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                            <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="page-ionic.html" class="folder">
                                <h5 class="mb-2">Ionic Chat App</h5>
                                <p class="mb-2"><i class="lar la-clock text-success mr-2 font-size-20"></i> 06 Dec, 2020</p>
                                <p class="mb-0"><i class="las la-file-alt text-success mr-2 font-size-20"></i> 08 Files</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8"> 
                    <div class="card card-block card-stretch card-height files-table">                   
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Files</h4>
                            </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <a href="page-files.html" class=" view-more">View All</a>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless tbl-server-info">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Members</th>
                                        <th scope="col">Last Edit</th>
                                        <th scope="col">Size</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="icon-small bg-danger rounded mr-3">
                                                    <i class="ri-file-excel-line"></i>
                                                </div>
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url=" {{asset('/vendor/doc-viewer/files/demo.pdf')}}" data-toggle="modal" data-target="#exampleModal" data-title="Weekly-report.pdf" style="cursor: pointer;">Weekly-report.pdf</div>
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>jan 21, 2020 me</td>
                                        <td>02 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton6" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="icon-small bg-primary rounded mr-3">
                                                    <i class="ri-file-download-line"></i>
                                                </div>
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url=" {{asset('/vendor/doc-viewer/files/demo.pdf')}}" data-toggle="modal" data-target="#exampleModal" data-title="VueJs.pdf" style="cursor: pointer;">VueJs.pdf</div>
                                            </div>
                                        </td>
                                        <td>Poul Molive</td>
                                        <td>jan 25, 2020 Poul Molive</td>
                                        <td>64 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton7" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="icon-small bg-info rounded mr-3">
                                                    <i class="ri-file-excel-line"></i>
                                                </div>
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url=" {{asset('/vendor/doc-viewer/files/demo.docx')}}" data-toggle="modal" data-target="#exampleModal" data-title="Milestone.docx" style="cursor: pointer;">Milestone.docx</div>
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>Mar 30, 2020 Gail Forcewind</td>
                                        <td>30 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton8" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton8">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="icon-small bg-success rounded mr-3">
                                                    <i class="ri-file-excel-line"></i>
                                                </div>
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url=" {{asset('/vendor/doc-viewer/files/demo.xlsx')}}" data-toggle="modal" data-target="#exampleModal" data-title="Training center.xlsx" style="cursor: pointer;">Training center.xlsx</div>
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>Mar 30, 2020 Gail Forcewind</td>
                                        <td>10 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton09" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton09">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="icon-small bg-warning rounded mr-3">
                                                    <i class="ri-file-excel-line"></i>
                                                </div>
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url=" {{asset('/vendor/doc-viewer/files/demo.pptx')}}" data-toggle="modal" data-target="#exampleModal" data-title="Flavour.pptx" style="cursor: pointer;">Flavour.pptx</div>
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>Mar 30, 2020 Gail Forcewind</td>
                                        <td>10 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton9" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton9">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-block card-stretch card-height ">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Statistic</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="layout-1-chart" style="min-height: 220px;"></div>
                            <div class="row mt-4">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="media align-items-center">
                                        <div class="icon iq-icon-box bg-primary rounded icon-statistic">
                                            <i class="las la-long-arrow-alt-down"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <p class="mb-0">Downloads</p>
                                            <h5>12,594</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="media align-items-center">
                                        <div class="icon iq-icon-box bg-light rounded icon-statistic">
                                            <i class="las la-long-arrow-alt-up"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <p class="mb-0">Uploads</p>
                                            <h5>1,458</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-block card-stretch card-height  plan-bg">
                        <div class="card-body">
                            <h4 class="mb-3 text-white">Unlock Your plan</h4>    
                            <p>Expanded Storage, Access To<br> More Features On CloudBOX</p>   
                            <div class="row align-items-center justify-content-between">
                               <div class="col-6 go-white ">
                                <a href="#" class="btn d-inline-block mt-5">Go Premium</a>
                               </div>
                                <div class="col-6">
                                    <img src=" {{asset('images/layouts/mydrive/lock-bg.png')}}" class="img-fluid" alt="image1">
                                </div>
                            </div>                     
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between pb-0">
                            <div class="header-title">
                                <h4 class="card-title">Storage</h4>
                            </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                    <span class="dropdown-toggle btn  dropdown-bg border border-primary text-primary rounded" id="dropdownMenuButton11"
                                        data-toggle="dropdown">
                                        Monthly<i class="ri-arrow-down-s-line ml-1"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right shadow-none"
                                        aria-labelledby="dropdownMenuButton11">
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div id="layout-1-chart2"></div>                
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">CloudBOX</a>.
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src=" {{asset('/js/backend-bundle.min.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src=" {{asset('/js/customizer./')}}" defer></script>
    
    <!-- Chart Custom JavaScript -->
    <script src=" {{asset('/js/chart-custom.js')}}" defer></script>
    
    <!--PDF-->
    <script src=" {{asset('/vendor/doc-viewer/include/pdf/pdf.js')}}"></script>
    <!--Docs-->
    <script src=" {{asset('/vendor/doc-viewer/include/docx/jszip-utils.js')}}"></script>
    <script src=" {{asset('/vendor/doc-viewer/include/docx/mammoth.browser.min.js')}}"></script>
    <!--PPTX-->
    <script src=" {{asset('/vendor/doc-viewer/include/PPTXjs/js/filereader.js')}}"></script>
    <script src=" {{asset('/vendor/doc-viewer/include/PPTXjs/js/d3.min.js')}}"></script>
    <script src=" {{asset('/vendor/doc-viewer/include/PPTXjs/js/nv.d3.min.js')}}"></script>
    <script src=" {{asset('/vendor/doc-viewer/include/PPTXjs/js/pptxjs.js')}}"></script>
    <script src=" {{asset('/vendor/doc-viewer/include/PPTXjs/js/divs2slides.js')}}"></script>
    <!--All Spreadsheet -->
    <script src=" {{asset('/vendor/doc-viewer/include/SheetJS/handsontable.full.min.js')}}"></script>
    <script src=" {{asset('/vendor/doc-viewer/include/SheetJS/xlsx.full.min.js')}}"></script>
    <!--Image viewer-->
    <script src=" {{asset('/vendor/doc-viewer/include/verySimpleImageViewer/js/jquery.verySimpleImageViewer.js')}}"></script>
    <!--officeToHtml-->
    <script src=" {{asset('/vendor/doc-viewer/include/officeToHtml/officeToHtml.js')}}"></script>
    <!-- app JavaScript -->
    <script src=" {{asset('/js/app.js')}}" defer></script>
    <script src=" {{asset('/js/doc-viewer.js')}}" defer></script>
     <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Title</h4>
                    <div>
                        <a class="btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="resolte-contaniner" style="height: 500px;" class="overflow-auto">
                        File not found
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>

<!-- Mirrored from templates.iqonic.design/cloudbox/html/backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 05:20:32 GMT -->
</html>