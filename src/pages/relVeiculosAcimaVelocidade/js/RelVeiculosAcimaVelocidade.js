Cmp.RelVeiculosAcimaVelocidade = function() {

    var private = {

        render: function() {

            Cmp.createInput({
                id: 'inputPlaca',
                renderTo: '#divInputPlaca',
                label: 'Placa do veículo',
                width: '200px'
            });

            Cmp.createButton({
                id: 'btnBuscar',
                renderTo: '#divBtnConsultar',
                text: 'Buscar',
                handler: function() {
                    private.buscar();
                }
            });

            Cmp.createGrid({
                id: 'gridDadosVeiculos',
                renderTo: '#divCmpGridVeiculo',
                header: [
                    {
                        text: 'Placa',
                        field: 'placa_veiculo'
                    }, {
                        text: 'Funcionario',
                        field: 'nome_funcionario',
                        width: 150
                    }, {
                        text: 'Data',
                        field: 'vel_maxima',
                        width: 150
                    }, {
                        text: 'Vel. Max.',
                        field: 'vel_maxima',
                        width: 150
                    } , {
                        text: 'Vel. Reg.',
                        field: 'vel_registrada',
                        width: 150
                    } , {
                        text: 'Diff. Vel',
                        field: 'vel_diff',
                        width: 150
                    } , {
                        text: 'Latitude',
                        field: 'latitude',
                        width: 150
                    } , {
                        text: 'Longitude',
                        field: 'longitude',
                        width: 150
                    }
                ]
            });
        },

        buscar: function() {
            Cmp.showLoading();

            Cmp.request({
                url: '/rastreamento',
                params: {
                    placa: Cmp.get('inputPlaca').getValue()
                },
                success: function(res) {
                    Cmp.hideLoading();
                    if(res.status == 'success') {
                        Cmp.get('gridDadosVeiculos').loadData(res.data);
                    } else {
                        Cmp.showErrorMessage(res.message || 'Ocorreu um erro na requisição');
                    }
                }
            });
        }

    };

    this.init = function() {
        private.render();
    }

}
