<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link  collapsed" href="/dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav-masterdata" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i>
        <span>Master Data</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav-masterdata" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="/data_klien">
            <i class="bi bi-circle"></i><span>Data Clien</span>
          </a>
        </li>
        <li>
          <a href="/data_permohonan">
            <i class="bi bi-circle"></i><span>Data Permohonan</span>
          </a>
        </li>
        <li>
          <a href="/data_akta">
            <i class="bi bi-circle"></i><span>Data Akta</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item ">
      <a class="nav-link  <?php echo(isset($menu) && ($menu == "klien") ? " active" : "collapsed"); ?>" href="/klien">
        <i class="bi bi-person"></i>
        <span>Clien</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
    <a class="nav-link  <?php echo(isset($menu) && ($menu == "permohonan") ? " active" : "collapsed"); ?>" href="/permohonan">
        <i class="bi bi-pen"></i>
        <span>Permohonan</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
    <a class="nav-link  <?php echo(isset($menu) && ($menu == "akta") ? " active" : "collapsed"); ?>" href="/akta">
        <i class="bi bi-file"></i>
        <span>Akta</span>
      </a>
    </li>

    <li class="nav-item">
    <a class="nav-link  <?php echo(isset($menu) && ($menu == "arsip") ? " active" : "collapsed"); ?>" href="/arsip">
        <i class="bi bi-archive"></i>
        <span>Arsip</span>
      </a>
    </li>
    <!-- End Contact Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav-laporan" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i>
        <span>Laporan</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav-laporan" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="/laci">
            <i class="bi bi-circle"></i><span>Laci</span>
          </a>
        </li>
        <li>
          <a href="/laporan_klien">
            <i class="bi bi-circle"></i><span>Klien</span>
          </a>
        </li>
        <li>
          <a href="/laporan_akta">
            <i class="bi bi-circle"></i><span>Akta</span>
          </a>
        </li>
        <li>
          <a href="/akta_perklien">
            <i class="bi bi-circle"></i><span>Akta Per Klien</span>
          </a>
        </li>
        <li>
          <a href="/laporan_permohonan">
            <i class="bi bi-circle"></i><span>Permohonan</span>
          </a>
        </li>
        <li>
          <a href="/laporan_arsip">
            <i class="bi bi-circle"></i><span>Arsip</span>
          </a>
        </li>
        <li>
          <a href="/laporan_arsip_laci">
            <i class="bi bi-circle"></i><span>Arsip per laci</span>
          </a>
        </li>
        <li>
          <a href="/arsip_perposisi">
            <i class="bi bi-circle"></i><span>Arsip per posisi</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="/logout">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Logout</span>
      </a>
    </li><!-- End Login Page Nav -->

  </ul>
</aside>
