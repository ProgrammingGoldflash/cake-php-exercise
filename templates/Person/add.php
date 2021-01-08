<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
use Cake\Core\Configure;
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Person'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="person form content">
            <?= $this->Form->create($person) ?>
            <fieldset>
                <legend><?= __('Add Person') ?></legend>
                <?php
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('job_id', ['options' => $job]);
                    // echo $this->Form->control('lehrberuf', ['options' => $lehrberuf]);
                    
                    // foreach ($school as $item) {
                    //     echo $item->id;
                    //     var_dump($item);
                        
                    // }

                    echo $this->Form->control('school_id', ['id' => 'schools', 'options' => $schools]);
		            echo $this->Form->control('lehrberuf_id', ['id' => 'lehrberufe']);
                    // echo $this->Form->radio( 'school', $school);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?php $this->append('script'); ?>
<script>
$(function() {
	$('#schools').change(function() {
		var selectedValue = $(this).val();

		var targeturl = '/secondTask/person/getlehrberufe' + '?id=' + selectedValue;
		$.ajax({
			type: 'get',
			url: targeturl,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			},
			success: function(response) {
				if (response.content) {
                    var $select = $('#lehrberufe')
                    $select.empty();
                    
                    $.each(response.content,function(key, value) 
                    {
                        $select.append('<option value=' + key + '>' + value + '</option>');
                    });
				}
			},
			error: function(e) {
				alert("An error occurred: " + e.responseText.message);
				console.log(e);
			}
		});
	});

});

$(function () {
    $("#schools").change();
});
</script>
<?php $this->end();
