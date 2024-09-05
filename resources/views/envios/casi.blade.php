@if( $envio[0]->estado  == "Entregado")
                                <div class="row p-3 text-center ms-10">
                                    <div class="col-2 text-center">
                                        <i class="fas fa-store-alt" style="font-size:45px; color:steelblue"></i> 
                                        <h4 style="margin-top: 0.25em;">Creado</h4>
                                    </div>
                                    <div class="col-3 py-4">
                                        <hr style="background-color: green; height: 8px; border: 0; opacity: 1; border-radius: 20px; ">
                                    </div>
                                    <div class="col-2 ">
                                        <i class="fas fa-shipping-fast" style="font-size:45px; color:steelblue"></i>  
                                        <h4 style="margin-top: 0.25em;">En Ruta</h4>
                                    </div>
                                    <div class="col-3 py-4">
                                        <hr style="background-color: green; height: 8px; border: 0; opacity: 1; border-radius: 20px; ">
                                    </div>
                                    <div class="col-2 ">
                                    <i class="fas fa-clipboard-check" style="font-size:45px; color:steelblue"></i> 
                                        <h4 style="margin-top: 0.25em;">Entregado</h4>
                                    </div>
                                </div>
                            @endif

                            @if( $envio[0]->estado  == "No entregado")
                                <div class="row p-3 text-center ms-10">
                                    <div class="col-2 text-center">
                                        <i class="fas fa-store-alt" style="font-size:45px; color:steelblue"></i> 
                                        <h4 style="margin-top: 0.25em;">Creado</h4>
                                    </div>
                                    <div class="col-3 py-4">
                                        <hr style="background-color: green; height: 8px; border: 0; opacity: 1; border-radius: 20px; ">
                                    </div>
                                    <div class="col-2 ">
                                        <i class="fas fa-shipping-fast" style="font-size:45px; color:steelblue"></i>  
                                        <h4 style="margin-top: 0.25em;">En Ruta</h4>
                                    </div>
                                    <div class="col-3 py-4">
                                        <hr style="background-color: red; height: 8px; border: 0; opacity: 1; border-radius: 20px; ">
                                    </div>
                                    <div class="col-2 ">
                                    <i class="fas fa-calendar-times" style="font-size:45px; color:steelblue"></i> 
                                        <h4 style="margin-top: 0.25em;">No entregado</h4>
                                    </div>
                                </div>
                            @endif

