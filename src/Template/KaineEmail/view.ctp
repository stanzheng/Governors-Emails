<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Email'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('Search Email'), ['action' => 'search']) ?> </li>
    </ul>
</nav>
<div class="kaineEmail view large-9 medium-8 columns content">
    <h3><?= h($kaineEmail->subject) ?></h3>
	<div class="row">
        <h4><?= __('Date') ?></h4>
        <?= $this->Text->autoParagraph(h($kaineEmail->date)); ?>
    </div>
    <div class="row">
        <h4><?= __('File') ?></h4>
        <?= $this->Text->autoParagraph(h($kaineEmail->file)); ?>
    </div>
    <div class="row">
        <h4><?= __('Subject') ?></h4>
        <?= $this->Text->autoParagraph(h($kaineEmail->subject)); ?>
    </div>
    <div class="row">
        <h4><?= __('Sender') ?></h4>
        <?= $this->Text->autoParagraph(h($kaineEmail->senderName)); ?>
    </div>
    <div class="row">
        <h4><?= __('Recipient') ?></h4>
        <?= $this->Text->autoParagraph(h($kaineEmail->recipientName)); ?>
    </div>
    <div class="row">
        <h4><?= __('CC') ?></h4>
        <?= $this->Text->autoParagraph(h($kaineEmail->ccName)); ?>
    </div>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($kaineEmail->body)); ?>
    </div>
</div>
