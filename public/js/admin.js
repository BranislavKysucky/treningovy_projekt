'use strict';

import 'promise-polyfill/src/polyfill';

const $ = require('jquery');
const swal = require('sweetalert2');
require('bootstrap');
require('bootstrap-toggle');
require('bootstrap-select');


$(document).ready(function () {


    $('#add-zaznam-btn').click(() => {


        swal({
            title: '<strong>Pridávanie</strong>',
            type: 'info',
            html: `
                <form id="zaznam-formular" name="zaznam-form">
                    <div class="row">
                        <div class="col-md-12 ">
                            <label class="align-middle2" for="exampleInputEmail1">Vyberte si nadriadeneho</label>
                            <select id="nadriadeny-select" name="nadriadenyId" class="selectpicker add-modal-select"></select>                         
                             
                            <label for="exampleInputEmail1">Vyplňte údaje</label>
                            
                    
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input class="form-control"  placeholder="Zamestnanec ID"  id="zamestnanecId"  name="zamestnanecId"  type="text"  />
                        </div>
                        <div class="col-md-6">
                            <input class="form-control"  placeholder="Zamestnanec meno"  id="zamestnanecMeno" name="zamestnanecMeno"  type="text"  />
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                       
                        <div class="col-md-6" >
                            <span class="label label-mesiac">Mesiac</span>
                            <select  class="selectpicker add-modal-select" name="mesiac"  id="mesiac" > 
                             <option value="1">1</option>  
                             <option value="2">2</option>  
                             <option value="3">3</option>  
                             <option value="4">4</option>  
                             <option value="5">5</option>  
                             <option value="6">6</option>  
                             <option value="7">7</option>  
                             <option value="8">8</option>  
                             <option value="9">9</option>  
                             <option value="10">10</option>  
                             <option value="11">11</option>  
                             <option value="12">12</option>  
                               </select>
                        </div>
                        <div class="col-md-6">
                            <span class="label label-rok">Rok</span> 
                            <input class="form-control"    placeholder="Zvoľte rok"  value="2019"  name="rok" id="rok"  type="text"  />                   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1" >Má prémiu?</label>
                            <input type="radio" name="maPremiu" id="maPremiu" data-otazka="1"   value="1" > áno </input> 
                            <input type="radio" name="maPremiu" id="maPremiu" data-otazka="1"  value="0" > nie </input> 
                        </div>
                    </div>
                 </form>`,

            onOpen: () => {


                $('.add-modal-select').selectpicker({});
            },

            onBeforeOpen: () => {


                $.get('/api/nadriadeny/').then((data) => {
                    console.log(data);
                    let select = $('#nadriadeny-select');
                    for (let i = 0; i < data.length; i++) {
                        select.append(`<option value="${data[i].id}">${data[i].id} ${data[i].meno}</option>`);
                    }

                    $('#nadriadeny-select').selectpicker('refresh');
                }).fail(() => swal({type: 'error', title: 'chyba'}))




            },

            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: 'Potvrdiť zmeny',
            preConfirm: () => {
                let data = $('#zaznam-formular').serializeArray();

                let result = {};
                for(let i = 0; i < data.length; i++) {
                    result[data[i].name] = data[i].value;
                }

                return result;
            }


        }).then(function (result) {
            if (result.value) {
                console.log(result.value);
                // console.log(result.value.zamestnanecId);
                // console.log(result.value.rok);
                $.ajax({
                    type: "POST",
                    url: "/admin/addZaznam",
                    data: {data: result.value},
                    cache: false,
                    success: function (response) {
                        swal(
                            "Odoslane!",
                        )
                    },
                    failure: function (response) {
                        swal(
                            "Chyba",
                        )
                    }
                });


            } else {
                // swal("chyba");
            }

        });
    })



});
