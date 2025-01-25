<div class="row">
    <div class="col-12">
        <div class="jumbotron">
            <div class='container'>
                <div class="row">
                    <div class="col-sm">
                        <div id="divInputPlaca"></div>
                    </div>
                    <div class="col-sm">
                        <div id="divInputFuncionario"></div>
                    </div>
                    <div class="col-sm">
                        <div id="divInputIntervalo"></div>
                    </div>
                </div>
                <div id="divBtnConsultar"></div>
            </div>
        </div>
    </div>
    <div id="divCmpGridVeiculo"></div>
</div>

<style type="text/css">
    .jumbotron {
        padding: 32px;
    }

    #divInputPlaca, #divBtnConsultar {
        display: inline-block;
        vertical-align: top;
    }

    #divBtnConsultar {
        margin-top: 32px;
        margin-left: 10px;
    }

    #divCmpGridVeiculo {
        display: inline-block;
        width: 100%;
        margin-bottom: 20px;
    }
</style>

<script type="text/javascript">
    Cmp.ready(function() {
        new Cmp.RelVeiculosAcimaVelocidade().init();
    });
</script>
