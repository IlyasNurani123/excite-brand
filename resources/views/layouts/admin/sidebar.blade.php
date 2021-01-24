<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('dashboard') }}" aria-expanded="false"><i
                            class="mdi mdi-view-dashboard"></i><span class="hide-menu"> {{ __('Dashboard') }}</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('project') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Portfolio</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link"
                        href="{{ route('service') }}" aria-expanded="false"><i class="mdi mdi-web"></i><span
                            class="hide-menu">{{ __('Services') }}</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('service') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu"> All Services </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ route('add-service') }}" class="sidebar-link"><i
                                    class="mdi mdi-plus-circle"></i><span class="hide-menu"> Add Service </span></a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link"
                        href="{{ route('testimonial') }}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                            class="hide-menu">{{ __('testimonials') }}</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('testimonial') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu"> Testimonials </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ route('add.testimonial') }}" class="sidebar-link"><i
                                    class="mdi mdi-plus-circle"></i><span class="hide-menu"> Add Testimonial </span></a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="{{ route('show.post') }}" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                            class="hide-menu">Posts </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('show.post') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu"> All Post </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('add.post') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Add Post</span></a></li>

                        <li class="sidebar-item"><a href="{{ route('post.trash') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu"> All Trash Post </span></a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('service.feature') }}"
                        aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Service
                            Feature</span></a></li> --}}
                {{-- <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('package') }}"
                        aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                            class="hide-menu">Packages</span></a></li> --}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="{{ route('slider') }}" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                            class="hide-menu">Slider </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('slider') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu"> All Slider </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ route('add.slider') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Add Slider</span></a></li>
                    </ul>
                </li>


                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('logo') }}" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span
                            class="hide-menu">Logo</span></a></li>
                {{-- <li class="sidebar-item"> <a
                        class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Icons </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i
                                    class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons </span></a>
                        </li>
                        <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                    class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font Awesome Icons
                                </span></a></li>
                    </ul>
                </li> --}}
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('banner') }}" aria-expanded="false"><i class="mdi mdi-pencil"></i><span
                            class="hide-menu">Banners</span></a></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
