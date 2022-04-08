

$.getJSON('json/KategoriPemeriksaan.txt', function (result) {

    $.each(result.data, function (key, value) {

        var data = `<div class="card mr-3 item-kategori" >
                        <div class="card-body">
                            <div class="media media-kategori">
                                <img src="${value.iconUrl}" class="img-kategori">
                                <div class="media-body">
                                    <h6 class="text-kategori">${value.name}</h6>
                                </div>
                            </div>
                        </div>
                    </div>`;

        $('.owl-carousel').owlCarousel('add', data).owlCarousel('update');
    });

});
$.getJSON('json/ResponsePemeriksaan.txt', function (result) {

    var data = "";
    var modal = "";

    var start = getUrlParameter("link");

    var limit = 12;
    var end   = Number(start) + Number(limit);
    
    var total = 0;

    $.each(result.data, function (key, value) {
        total++;

        // console.log(total);

        if (key >= start && key < end) {
            data += `<div class="col-md-3 mb-2">
                    <div class="card item-response" style="border-radius:30px">

                        <div class="card-body bb-0 p-0" style="z-index:10">
                            <p class="label-card">Promo</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">${value.name}</h5>
                            <p class="card-text font-weight-bold">Rp ${value.marginPrice}</p>
                            
                            <span style="background-color:#b5dde4;width:18%;color:#354177;border-radius:3px;padding:3px" class="card-text">50%</span><del class="price">Rp 200000</del>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <img src="${value.laboratoryLogo}" class="img-responsive w-50">
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/img/pin.png" class="img-responsive w-5"><small>${value.city.replace("KOTA", "")}</small>
                                </div>
                            </div>   
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="row">
                                <div class="col-md-12">
                                    <a type="button" class="modalClick" data-modal="`+key+`" data-toggle="modal" data-target="#exampleModal`+key+`"><small>Lihat Detail</small></a>
                                    <img src="assets/img/cart.png" class="chart-btn img-responsive" style="max-width:30px;float:right">
                                </div>
                            </div>                          
                        </div>
                    </div>
                </div>`;

            // Loop modal
            modal += `<div class="modal fade" id="exampleModal`+key+`" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">${value.name}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="180px">Nama Laboratorium</th>
                                        <th>:</th>
                                        <td>${value.laboratoryName}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <th>:</th>
                                        <td>${value.address}</td>
                                    </tr>
                                    <tr>
                                        <th>Kota</th>
                                        <th>:</th>
                                        <td>${value.city}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>`;
        }

    });

    var totalLink = Number(total) / Number(limit);

    
    var link = "";

    link += "<div class='col-md-4 offset-md-4'>";
        
        for (let i = 0; i < totalLink; i++) {
            
            var linkTo = i * limit;
            
            link += `<a href="?link=${linkTo}" class="btn btn-default mt-5">`+ (Number(i)+Number(1)) +`</a>`;
            
    }
    link += "</div>";

    $('.data-response').append(data);
    $('.modal-place').append(modal);
    $('.link-response').append(link);


});

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

// Modal click
$('body').on("click", ".modalClick", function(){
    var modal = $(this).data('modal');
    // console.log(modal);
    $('#exampleModal'+modal).modal('show');
});