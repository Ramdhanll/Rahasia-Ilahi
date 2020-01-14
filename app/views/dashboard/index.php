<?php 
function rupiah($angka){
	
    $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
    return $hasil_rupiah;
}
?>
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>Dashboard
                            <div class="page-title-subheading">Storage area of goods
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Suppliers</div>
                                    <div class="widget-subheading">Suppliers Warehouse</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success"><?= count($data['suppliers']) ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Customers</div>
                                    <div class="widget-subheading">Customers Warehouse</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-warning"><?= count($data['customers']) ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Transactions</div>
                                    <div class="widget-subheading">People Interesting</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-danger"><?= count($data['transactions']) ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-5">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Income</div>
                                    <div class="widget-subheading">Sales Income</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-primary"><?= rupiah($data['total']) ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        