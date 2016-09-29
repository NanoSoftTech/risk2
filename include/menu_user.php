<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="?page=<?php echo sha1('main')?>"><i class="fa fa-dashboard fa-fw"></i> เมนูระบบ</a>
                        </li>
                        <li>
                            <a href="?page=<?php echo sha1('add_risk')?>"><i class="fa fa-bar-chart-o fa-fw"></i> บันทึกความเสี่ยง</a>
                        </li>
                        <li>
                            <a href="?page=<?php echo sha1('list_risk')?>"><i class="fa fa-table fa-fw"></i> รายการความเสี่ยง</a>
                        </li>
                        <?php if($user_sta == '2'){?>
                        <li>
                            <a href="?page=<?php echo sha1('show_risk')?>"><i class="fa fa-table fa-fw"></i> จัดการความเสี่ยง</a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="?page=<?php echo sha1('report_main')?>"><i class="fa fa-edit fa-fw"></i> ระบบรายงาน</a>
                        </li>
                        <li>
                            <a href="?page=<?php echo sha1('logout')?>"><i class="fa fa-lock fa-fw"></i> ออกจากระบบ</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
                    </nav>
