
      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block;">
          <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total All Users</span>
              <div class="count"><?= $alluser ?></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Admin</span>
              <div class="count blue"><?= $admin ?></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total User</span>
              <div class="count green"><?= $user ?></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Artikel</span>
              <div class="count red"><?= $artikel ?></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Berita</span>
              <div class="count purple"><?= $berita ?></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Kalender</span>
              <div class="count yellow"><?= $kalender ?></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Topik Diskusi</span>
              <div class="count yellow"><?= $topik ?></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Donasi</span>
              <div class="count yellow"><?= $donasi ?></div>
            </div>
          </div>
        </div>
        <!-- /top tiles -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>