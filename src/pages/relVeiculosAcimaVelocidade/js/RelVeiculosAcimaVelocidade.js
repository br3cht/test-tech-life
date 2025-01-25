Cmp.RelVeiculosAcimaVelocidade = function() {

    var private = {

        render: function() {

            Cmp.createInput({
                id: 'inputPlaca',
                renderTo: '#divInputPlaca',
                label: 'Placa do veículo',
                width: '200px'
            });

            Cmp.createInput({
                id: 'inputFuncionario',
                renderTo: '#divInputFuncionario',
                label: 'Nome Funcionario',
                width: '200px'
            });

            Cmp.createInputInterval({
                id: 'inputIntervalo',
                idDateStart:'inputInitialInterval',
                idDateEnd:'inputEndInterval',
                renderTo: '#divInputIntervalo',
                label: 'Data da Ocorrencia',
                width: '200px'
            })

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
                        field: 'data_ocorrencia',
                        width: 150
                    }, {
                        text: 'Vel. Max.',
                        field: 'velocidade_maxima',
                        width: 150
                    } , {
                        text: 'Vel. Reg.',
                        field: 'velocidade_registrada',
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
            console.log(Cmp)
            Cmp.request({
                url: '/rastreamento',
                params: {
                    placa: Cmp.get('inputPlaca').getValue(),
                    data_inicial: Cmp.get('inputIntervalo').getValueInitial(),
                    data_final: Cmp.get('inputIntervalo').getValueEnd(),
                    funcionario: Cmp.get('inputFuncionario').getValue()
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
