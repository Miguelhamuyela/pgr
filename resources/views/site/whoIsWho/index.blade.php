@extends('layouts.merge.site')
@section('titulo', 'Quem é Quem')
@section('content')

    <main id="main">


        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding" style="margin: 150px auto 0px auto !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="section-headline text-center">
                            <h2>Quem é Quem</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin: 0 auto !important;">
                        <div>
                            <?php
                            if (isset($_GET['sub_id'])) {
                                $sub_id = trim($_GET['sub_id']);
                                $sub_id = htmlspecialchars($_GET['sub_id']);
                                include 'subprocurador.php';
                                echo getSubProcuradorById($sub_id);
                            } else {
                                include 'procuradores.php';
                            }
                            ?>
                        </div>
                        <!-- End col-->
                    </div>
                </div>
            </div>
            <!-- End About Section -->

    </main> 


@endsection
