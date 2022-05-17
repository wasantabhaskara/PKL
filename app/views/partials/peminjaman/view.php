<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("peminjaman/add");
$can_edit = ACL::is_allowed("peminjaman/edit");
$can_view = ACL::is_allowed("peminjaman/view");
$can_delete = ACL::is_allowed("peminjaman/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Peminjaman</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id_peminjaman']) ? urlencode($data['id_peminjaman']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-divisi_peminjam">
                                        <th class="title"> Divisi Peminjam: </th>
                                        <td class="value">
                                            <a size="sm" class="btn btn-sm btn-primary page-modal" href="<?php print_link("roles/view/" . urlencode($data['divisi_peminjam'])) ?>">
                                                <i class="fa fa-eye"></i> <?php echo $data['roles_role_name'] ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr  class="td-barang">
                                        <th class="title"> Barang: </th>
                                        <td class="value">
                                            <a size="sm" class="btn btn-sm btn-primary page-modal" href="<?php print_link("stok_barang/view/" . urlencode($data['barang'])) ?>">
                                                <i class="fa fa-eye"></i> <?php echo $data['stok_barang_nama_barang'] ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr  class="td-jumlah_barang">
                                        <th class="title"> Jumlah Barang: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['jumlah_barang']; ?>" 
                                                data-pk="<?php echo $data['id_peminjaman'] ?>" 
                                                data-url="<?php print_link("peminjaman/editfield/" . urlencode($data['id_peminjaman'])); ?>" 
                                                data-name="jumlah_barang" 
                                                data-title="Enter Jumlah Barang" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['jumlah_barang']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-tanggal_peminjaman">
                                        <th class="title"> Tanggal Peminjaman: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['tanggal_peminjaman']; ?>" 
                                                data-pk="<?php echo $data['id_peminjaman'] ?>" 
                                                data-url="<?php print_link("peminjaman/editfield/" . urlencode($data['id_peminjaman'])); ?>" 
                                                data-name="tanggal_peminjaman" 
                                                data-title="Enter Tanggal Peminjaman" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['tanggal_peminjaman']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-hingga">
                                        <th class="title"> Hingga: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['hingga']; ?>" 
                                                data-pk="<?php echo $data['id_peminjaman'] ?>" 
                                                data-url="<?php print_link("peminjaman/editfield/" . urlencode($data['id_peminjaman'])); ?>" 
                                                data-name="hingga" 
                                                data-title="Enter Hingga" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['hingga']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-keperluan">
                                        <th class="title"> Keperluan: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['keperluan']; ?>" 
                                                data-pk="<?php echo $data['id_peminjaman'] ?>" 
                                                data-url="<?php print_link("peminjaman/editfield/" . urlencode($data['id_peminjaman'])); ?>" 
                                                data-name="keperluan" 
                                                data-title="Enter Keperluan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['keperluan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                        </div>
                                    </div>
                                    <?php if($can_edit){ ?>
                                    <a class="btn btn-sm btn-info"  href="<?php print_link("peminjaman/edit/$rec_id"); ?>">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <?php } ?>
                                    <?php if($can_delete){ ?>
                                    <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("peminjaman/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                        <i class="fa fa-times"></i> Delete
                                    </a>
                                    <?php } ?>
                                </div>
                                <?php
                                }
                                else{
                                ?>
                                <!-- Empty Record Message -->
                                <div class="text-muted p-3">
                                    <i class="fa fa-ban"></i> No Record Found
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
