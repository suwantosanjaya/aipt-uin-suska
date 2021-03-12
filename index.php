<html>
<head>
    <title>Dashboard Data Pendukung Akreditasi Institusi Perguruan Tinggi (AIPT) - UIN Suska Riau</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="./manifest.json" rel="manifest">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" crossorigin="anonymous">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/metisMenu.min.css" rel="stylesheet">
    <link href="./css/mm-folder.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./img/uin512.png" rel="apple-touch-icon">
    <meta content="#10897B" name="theme-color"/>
    <link rel="icon" href="./img/logo-uin.png"/>
</head>
<body>
<header>
    <div class="navbar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col d-flex flex-row">
                    <img src="./img/logo-uin.png" width="68"/>
                </div>
                <div class="col col-auto dash">
                    Dashboard Data Pendukung Akreditasi Institusi Perguruan Tinggi (AIPT)<br>
                    UIN Sultan Syarif Kasim Riau
                </div>
                <div class="col col-auto collapse-dash">
                    Dashboard Data Pendukung AIPT<br>
                    UIN Sultan Syarif Kasim Riau
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="beranda-tab" data-toggle="tab" href="#beranda" role="tab" aria-controls="beranda" aria-selected="true">Beranda</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="lampiran-tab" data-toggle="tab" href="#lampiran" role="tab" aria-controls="lampiran" aria-selected="false">Dokumen Pendukung</a>
        </li>
    </ul>
</header>
<main>
    <div class="tab-content mt-md-3" id="myTabContent">
        <div class="tab-pane fade show active" id="beranda" role="tabpanel" aria-labelledby="beranda-tab">
            <div class="jumbotron jumbotron-fluid pt-3 pb-3 mt-md-3">
                <div class="container">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/J6JjYyaX3lg" frameborder="0" rel="noreferrer" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 pb-3">
                <div class="col pt-2">
                    <div class="card">
                        <img src="./img/visi.png" class="card-img-top" alt="visi">
                        <div class="card-body">
                            Visi UIN Suska Riau adalah terwujudnya Universitas Islam Negeri sebagai lembaga pendidikan tinggi pilihan utama pada tingkat dunia yang mengembangkan ajaran Islam, ilmu pengetahuan, teknologi dan/atau seni secara integral pada tahun 2023
                        </div>
                    </div>
                </div>
                <div class="col pt-2">
                    <div class="card">
                        <img src="./img/misi.png" class="card-img-top" alt="misi">
                        <div class="card-body">
                            <ol class="mt-0">
                                <li>Menyelenggarakan pendidikan dan pengajaran untuk melahirkan sumber daya manusia yang berkualitas secara akademik dan profesional serta memiliki integritas pribadi sebagai sarjana muslim</li>
                                <li>Menyelenggarakan penelitian dan pengkajian untuk mengembangkan ilmu pengetahuan, teknologi, dan/atau seni dengan menggunakan paradigma Islami</li>
                                <li>Menyelenggarakan pengabdian kepada masyarakat dengan memanfaatkan ilmu pengetahuan teknologi dan/atau seni dengan menggunakan paradigma Islami</li>
                                <li>Menyelenggarakan tatapamong perguruan tinggi yang otonom, akuntabel, dan trasnparan yang menjamin peningkatan kualitas berkelajutan</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col pt-2">
                    <div class="card">
                        <img src="./img/tujuan.png" class="card-img-top" alt="tujuan">
                        <div class="card-body">
                            <ol>
                                <li>Menghasilkan lulusan yang berakhlak mulia dan menjadi anggota masyarakat yang memiliki kemampuan serta keunggulan akademik dan/atau profesional yang dapat menerapkan, mengembangkan, menciptakan ilmu pegetahuan, teknologi, dan/atau seni yang bernafaskan Islam</li>
                                <li>Mengembangkan dan menyebarluaskan ilmu agama Islam, ilmu pengetahuan, teknologi, dan/atau seni serta mengupayakan penggunaannya untuk meningkatkan martabat dan taraf kehidupan masyarakat serta memperkaya kebudayaan nasional</li>
                                <li>Menghasilkan karya ilmiah dan karya kreatif yang unggul berkelas dunia</li>
                                <li>Menghasilkan kinerja institusi yang efektif untuk menjamin pertumbuhan kualitas pelaksanaan tridharma perguruan tinggi yang berkelanjutan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="jumbotron jumbotron-fluid pt-3 pb-3 mt-md-3">
                <div class="container">
                    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                                for($i=0;$i<13;$i++){
                                    if($i==0){
                                        echo "<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"".$i."\" class=\"active\"></li>";
                                    }else {
                                        echo "<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"".$i."\"></li>";
                                    }
                                }
                            ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php
                            /*
                            for($i=0;$i<13;$i++){
                                if($i==0){
                                    echo "
                                        <div class=\"carousel-item active\">
                                            <img src=\"./img/fasilitas/".($i+1).".jpg\" class=\"d-block w-100\" alt=\"fasilitas\">
                                        </div>
                                    ";
                                }else {
                                    echo "
                                        <div class=\"carousel-item\">
                                            <img src=\"./img/fasilitas/".($i+1).".jpg\" class=\"d-block w-100\" alt=\"fasilitas\">
                                        </div>
                                    ";
                                }
                            }
                            */
                            ?>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="lampiran" role="tabpanel" aria-labelledby="lampiran-tab">
            <div id="tree">
                <ul class="metisFolder metismenu">
                    <?php

                    $json_a0 = file_get_contents("data/a_apt_00.json");
                    $json_a0_data = json_decode($json_a0, true);
                    $json_a1 = file_get_contents("data/a_apt_01.json");
                    $json_a1_data = json_decode($json_a1, true);
                    $json_a2 = file_get_contents("data/a_apt_02.json");
                    $json_a2_data = json_decode($json_a2, true);
                    $json_a3 = file_get_contents("data/a_apt_03.json");
                    $json_a3_data = json_decode($json_a3, true);
                    $json_a4 = file_get_contents("data/a_apt_04.json");
                    $json_a4_data = json_decode($json_a4, true);
                    $json_a5 = file_get_contents("data/a_apt_05.json");
                    $json_a5_data = json_decode($json_a5, true);
                    $json_a6 = file_get_contents("data/a_apt_06.json");
                    $json_a6_data = json_decode($json_a6, true);
                    $json_a7 = file_get_contents("data/a_apt_07.json");
                    $json_a7_data = json_decode($json_a7, true);
                    $json_a8 = file_get_contents("data/a_apt_08_doc.json");
                    $json_a8_data = json_decode($json_a8, true);

                    $json_b1 = file_get_contents("data/b_aps_01_upps.json");
                    $json_b1_data = json_decode($json_b1, true);
                    $json_b2 = file_get_contents("data/b_aps_02_prodi.json");
                    $json_b2_data = json_decode($json_b2, true);
                    $json_b3 = file_get_contents("data/b_aps_03_doc.json");
                    $json_b3_data = json_decode($json_b3, true);

                    $json_a = array_merge($json_a0_data, $json_a1_data, $json_a2_data, $json_a3_data, $json_a4_data,
                                            $json_a5_data, $json_a6_data, $json_a7_data, $json_a8_data);
                    $json_b = array_merge($json_b1_data, $json_b2_data, $json_b3_data);

                    $json_all = file_get_contents("data/frame_all.json");
                    $json_all_data = json_decode($json_all, true);
                    
                    $json_all_data[0]["child"] = $json_a;
                    $json_all_data[1]["child"] = $json_b;

                    function iconStyle($type)
                    {
                        $icon = "fa fa-fw fa-folder text-success";
                        $patternImg = '/(jpg|jpeg|png|gif|bmp)$/i';
                        $patternDoc = '/(doc|docx)$/i';
                        $patternPpt = '/(ppt|pptx)$/i';
                        $patternPdf = '/(pdf)$/i';
                        $patternXls = '/(xls|xlsx)$/i';
                        $patternDrv = '/(fdrive)$/i';
                        $patternLnk = '/(link)$/i';
                        if (preg_match($patternImg, $type)) {
                            $icon = "fa fa-fw fa-file-image-o text-primary";
                        } elseif (preg_match($patternDoc, $type)) {
                            $icon = "fa fa-fw fa-file-word-o text-primary";
                        } elseif (preg_match($patternPpt, $type)) {
                            $icon = "fa fa-fw fa-file-powerpoint-o text-danger";
                        } elseif (preg_match($patternPdf, $type)) {
                            $icon = "fa fa-fw fa-file-pdf-o text-danger";
                        } elseif (preg_match($patternXls, $type)) {
                            $icon = "fa fa-fw fa-file-excel-o text-success";
                        } elseif (preg_match($patternDrv, $type)) {
                            $icon = "fab fa-google-drive text-success";
                        } elseif (preg_match($patternLnk, $type)) {
                            $icon = "fas fa-link text-primary";
                        } else {
                            $icon = "fa fa-fw fa-folder text-primary";
                        }
                        return $icon;
                    }

                    function findNode($data, $id, $result = array())
                    {
                        foreach ($data as $key => $value) {
                            if ($value["id"] == $id) {
                                $result = array("id" => $value["id"],
                                    "title" => $value["title"],
                                    "link" => $value["link"],
                                    "type" => $value["type"],
                                    "rel" => $value["rel"],
                                    "child" => $value["child"]
                                );
                                break;
                            } else {
                                $result = findNode($value["child"], $id, $result);
                            }
                        }
                        return $result;
                    }

                    function cekRelasi($id = array())
                    {
                        $result = array();
                        foreach ($id as $key => $value) {
                            $search = findNode($GLOBALS['json_data'], $value);
                            array_push($result, $search);
                        }
                        return $result;
                    }

                    function cetakTree($data, $keyword = "")
                    {
                        if (isset($data)) {
                            foreach ($data as $key => $value) {
                                if (isset($value["child"])) {
                                    $icon = iconStyle($value["type"]);
                                    if (count($value["child"]) > 0) {
                                        echo '
                                            <li>											    
                                                <a href="#"><span class="' . $icon . '"></span>' . $value["title"] . '</a>';
                                        echo '  <ul>';
                                        cetakTree($value["child"]);
                                        echo '  </ul>';
                                        echo '
                                            </li>
                                        ';
                                    } else {
                                        $fileDir = "files/";
                                        $file = $value["link"];
                                        /*
                                        if (filetype($fileDir . $file) == "file") {
                                            $file = $fileDir . $file;
                                        }
                                        */
                                        $title = ($value["title"] != "") ? $value["title"] : $file;

                                        if ($file == "") {
                                            echo '
                                                <li>
                                                    <a href="#" target="_blank"><span class="' . $icon . '"></span>' . $title . '</a>
                                                </li>';
                                            continue;
                                        }

                                        echo '
                                            <li>
                                                <a href="' . $file . '" target="_blank"><span class="' . $icon . '"></span>' . $title . '</a>';
                                        if (count($value["rel"]) > 0) {
                                            echo '<ul class="mm-show">';
                                            $search = cekRelasi($value["rel"]);
                                            foreach ($search as $key => $valueRel) {
                                                $fileRel = $valueRel["link"];
                                                if (filetype($fileDir . $fileRel) == "file") {
                                                    $file = $fileDir . $value["link"];
                                                }

                                                $iconRel = iconStyle($valueRel["type"]);
                                                $titleRel = ($valueRel["title"] != "") ? $valueRel["title"] : $fileRel;

                                                if ($fileRel == "") {
                                                    echo '
                                                                    <li>
                                                                        <a href="#" target="_blank"><span class="' . $iconRel . '"></span>' . $titleRel . '</a>
                                                                    </li>';
                                                    continue;
                                                }
                                                echo '
                                                            <li><a href="' . $fileRel . '" target="_blank"><span class="' . $iconRel . '"></span>' . $titleRel . '</a></li>';
                                            }
                                            echo "</ul>";

                                        }
                                        echo '
                                            </li>
                                        ';
                                    }

                                }
                            }
                        }
                    }

                    cetakTree($json_all_data);
                    ?>
                </ul>
            </div>
        </div>



        <!--<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>-->
    </div>


</main>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" crossorigin="anonymous"></script>
<script src="js/metisMenu.min.js"></script>
<script>
    // REGISTER SERVICE WORKER
    if ("serviceWorker" in navigator) {
        window.addEventListener("load", () => {
            navigator.serviceWorker
                .register("/aipt-uin-suska/service-worker.js")
                .then(() => console.log("Pendaftaran ServiceWorker berhasil"))
                .catch((err) => console.log("Pendaftaran ServiceWorker gagal "+err));
        });
    } else {
        console.log("ServiceWorker belum didukung browser ini.");
    }

    $(document).ready(function () {
        $(".metismenu").metisMenu({
            toggle: false
        });
    });
</script>
</body>
</html>