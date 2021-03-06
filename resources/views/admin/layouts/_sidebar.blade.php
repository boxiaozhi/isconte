<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Navi 管理</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.navi.index') }}"><i class="fa fa-circle-o"></i>列表</a></li>
                    <li><a href="{{ route('admin.naviLabel.index') }}"><i class="fa fa-circle-o"></i>标签</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Layout Options</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                    <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                    <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                    <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                </ul>
            </li>
            <li>
                <a href="../widgets.html">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">Hot</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="../calendar.html">
                    <i class="fa fa-calendar"></i>
                    <span>Calendar</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-red">3</small>
                        <small class="label pull-right bg-blue">17</small>
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i>
                    <span>Multilevel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i> Level One
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-circle-o"></i> Level Two
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-circle-o"></i> Level Three
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-circle-o"></i> Level Three
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i> Level One
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a>
            </li>

            <li class="header">LABELS</li>
            <li>
                <a href="#">
                    <i class="fa fa-circle-o text-red"></i>
                    <span>Important</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-circle-o text-yellow"></i>
                    <span>Warning</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>