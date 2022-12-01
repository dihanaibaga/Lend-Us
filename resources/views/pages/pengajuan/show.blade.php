@extends('layouts.master')
@section('content')
<div class="content-body">
    <section class="invoice-preview-wrapper">
        <div class="row invoice-preview">
            <!-- Invoice -->
            <div class="col-xl-9 col-md-8 col-12">
                <div class="card invoice-preview-card">
                    <div class="card-body invoice-padding pb-0">
                        <!-- Header starts -->
                        <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                            <div>
                                <div>
                                    <h3 class="text-primary">Detail Peminjaman</h3>
                                </div>
                                <p class="card-text mb-25"></p>
                                <p class="card-text mb-25">Ruang Laboratorium</p>
                            </div>
                            <div class="mt-md-0 mt-2">
                                <h4 class="invoice-title">
                                    id Peminjaman
                                    <span class="invoice-number">#3492</span>
                                </h4>
                                <div class="invoice-date-wrapper">
                                    <p class="invoice-date-title">Pengajuan:</p>
                                    <p class="invoice-date">25/08/2020</p>
                                </div>
                                <div class="invoice-date-wrapper">
                                    <p class="invoice-date-title">Proses:</p>
                                    <p class="invoice-date">29/08/2020</p>
                                </div>
                            </div>
                        </div>
                        <!-- Header ends -->
                    </div>

                    <hr class="invoice-spacing" />

                    <!-- Address and Contact starts -->
                    <div class="card-body invoice-padding pt-0">
                        <div class="row invoice-spacing">
                            <div class="col-xl-8 p-0">
                                <h6 class="mb-2">Data Peminjaman:</h6>
                                <h6 class="mb-25">Efni Humairoh</h6>
                                <p class="card-text mb-25">Analis data Akademik</p>
                                <p class="card-text mb-25">130190034</p>
                                <p class="card-text mb-25">0822 7795 8348</p>
                                <p class="card-text mb-0">efnihumairoh@gmail.com</p>
                            </div>
                            <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                <h6 class="mb-2">Prses Detail:</h6>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="pr-1">Diverifikasi Oleh:</td>
                                            <td><span class="font-weight-bold">Candra Asti</span></td>
                                        </tr>
                                        <tr>
                                            <td class="pr-1">Petugas:</td>
                                            <td>Administrasi PTIPD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Address and Contact ends -->

                    <!-- Invoice Description starts -->

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="py-1">Deskripsi Peminjaman</th>
                                    <th class="py-1">Jumlah</th>
                                    <th class="py-1">Durasi</th>
                                    <th class="py-1">Catatan</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="py-1">
                                        <p class="card-text font-weight-bold mb-25">Laboratorium</p>
                                        <p class="card-text text-nowrap">
                                            Kegiatan Ujian CAT Mandiri
                                        </p>
                                    </td>
                                    <td class="py-1">
                                        <span class="font-weight-bold">4 Ruang</span>
                                    </td>
                                    <td class="py-1">
                                        <span class="font-weight-bold">7 Hari</span>
                                    </td>
                                    <td class="py-1">
                                        <span class="font-weight-bold">Full Time</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-body invoice-padding pb-0">
                        <div class="row invoice-sales-total-wrapper">
                            <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                                <p class="card-text mb-0">
                                    <span class="font-weight-bold">PJ:</span> <span class="ml-75">an Kabag Akademik</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Invoice Description ends -->

                    <hr class="invoice-spacing" />

                    <!-- Invoice Note starts -->
                    <div class="card-body invoice-padding pt-0">
                        <div class="row">
                            <div class="col-12">
                                <span class="font-weight-bold">Catatan:</span>
                                <span>Pastikan semua syarat administrasi sudah diterima sebelum pengajuan peminjaman ini di setujui</span>
                            </div>
                        </div>
                    </div>
                    <!-- Invoice Note ends -->
                </div>
            </div>
            <!-- /Invoice -->

            <!-- Invoice Actions -->
            <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary btn-block mb-75" data-toggle="modal" data-target="#send-invoice-sidebar">
                            Terima Peminjaman
                        </button>
                        <button class="btn btn-outline-secondary btn-block btn-download-invoice mb-75">Pending</button>
                        <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#add-payment-sidebar">
                            Tolak
                        </button>
                    </div>
                </div>
            </div>
            <!-- /Invoice Actions -->
        </div>
    </section>

    <!-- Send Invoice Sidebar -->
    <div class="modal modal-slide-in fade" id="send-invoice-sidebar" aria-hidden="true">
        <div class="modal-dialog sidebar-lg">
            <div class="modal-content p-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                    <h5 class="modal-title">
                        <span class="align-middle">Send Invoice</span>
                    </h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <form>
                        <div class="form-group">
                            <label for="invoice-from" class="form-label">From</label>
                            <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com" />
                        </div>
                        <div class="form-group">
                            <label for="invoice-to" class="form-label">To</label>
                            <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com" />
                        </div>
                        <div class="form-group">
                            <label for="invoice-subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods" />
                        </div>
                        <div class="form-group">
                            <label for="invoice-message" class="form-label">Message</label>
                            <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="11" placeholder="Message...">
                                            Dear Queen Consolidated,

                                            Thank you for your business, always a pleasure to work with you!

                                            We have generated a new invoice in the amount of $95.59

                                            We would appreciate payment of this invoice by 05/11/2019</textarea>
                        </div>
                        <div class="form-group">
                            <span class="badge badge-light-primary">
                                <i data-feather="link" class="mr-25"></i>
                                <span class="align-middle">Invoice Attached</span>
                            </span>
                        </div>
                        <div class="form-group d-flex flex-wrap mt-2">
                            <button type="button" class="btn btn-primary mr-1" data-dismiss="modal">Send</button>
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Send Invoice Sidebar -->

    <!-- Add Payment Sidebar -->
    <div class="modal modal-slide-in fade" id="add-payment-sidebar" aria-hidden="true">
        <div class="modal-dialog sidebar-lg">
            <div class="modal-content p-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                    <h5 class="modal-title">
                        <span class="align-middle">Add Payment</span>
                    </h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <form>
                        <div class="form-group">
                            <input id="balance" class="form-control" type="text" value="Invoice Balance: 5000.00" disabled />
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="amount">Payment Amount</label>
                            <input id="amount" class="form-control" type="number" placeholder="$1000" />
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="payment-date">Payment Date</label>
                            <input id="payment-date" class="form-control date-picker" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="payment-method">Payment Method</label>
                            <select class="form-control" id="payment-method">
                                <option value="" selected disabled>Select payment method</option>
                                <option value="Cash">Cash</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="Debit">Debit</option>
                                <option value="Credit">Credit</option>
                                <option value="Paypal">Paypal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="payment-note">Internal Payment Note</label>
                            <textarea class="form-control" id="payment-note" rows="5" placeholder="Internal Payment Note"></textarea>
                        </div>
                        <div class="form-group d-flex flex-wrap mb-0">
                            <button type="button" class="btn btn-primary mr-1" data-dismiss="modal">Send</button>
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Payment Sidebar -->

</div>


@endsection
