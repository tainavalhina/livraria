<div class=" w-100 d-flex justify-content-center" style="margin-top:8em;">
    <div class="mt-5 mb-5">


        <h3><?= __('Produtos') ?></h3>
        <div class="table-responsive">
            <table cellpadding="10" cellspacing="10">

                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nome_produto') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>

                <tbody>
                    <?php foreach ($produtos as $produto) : ?>
                        <tr>
                            <td><?= $this->Number->format($produto->id) ?></td>
                            <td><?= h($produto->nome_produto) ?></td>
                            <td><?= h($produto->categoria_id) ?></td>
                            <td><?= h($produto->descricao) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
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