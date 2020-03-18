
<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center alert-success"><?php display_message(); ?></h3>
        <h1 class="page-header">
            Dashboard <small>Orders</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Orders
            </li>
        </ol>
        <h4 class="text-center alert-success"><?php display_message(); ?></h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <p class="text-center alert-success"><?php display_message(); ?></p>
        <table class="table table-hover table-responsive">
            <thead>
            <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>Transaction</th>
                <th>Currency</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <?php display_orders(); ?>
            </tbody>
        </table>
    </div>
</div>