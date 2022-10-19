<div class=" w-100 d-flex justify-content-center" style="margin-top:8em;">
    <div class="mt-5 mb-5">

        <div class="compras index large-9 medium-8 columns content">
            <h2><?= __('Compras') ?></h2>
            <table cellpadding="15" cellspacing="25">

                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('produto_id') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>

                <tbody>
                    <?php foreach ($compras as $compra) : ?>
                        <tr>
                            <td><?= $this->Number->format($compra->id) ?></td>
                            <td><?= h($compra->user->nome) ?></td>
                            <td><?= h($compra->produto->nome_produto) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $compra->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $compra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compra->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
            </div>
        </div>
    </div>
</div>