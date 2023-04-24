<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>

<div class="contratos reporte content">
    <h1>Suma de montos por cliente</h1>

    <?= $this->Form->create(null, ['type' => 'get']) ?>
    <?= $this->Form->input('fecha_inicio', ['type' => 'date']) ?>
    <?= $this->Form->input('fecha_fin', ['type' => 'date']) ?>
    <div id="reporte"><button id="reporte">Mostrar resultados</button>
    </div>

    <?= $this->Form->end() ?>
    <h3><?= __('Contratos') ?></h3>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>

                    <th><?= $this->Paginator->sort('clienteId') ?></th>
                    <th><?= $this->Paginator->sort('monto') ?></th>

                </tr>
            </thead>
            <tbody>
            
                <?php foreach ($contratos as $contrato) : ?>

                    <tr>

                        <td><?= $this->Number->format($contrato->clienteId) ?></td>
                        <td><?= $this->Number->format($contrato->monto) ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>