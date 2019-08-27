<table class="month <?=$monthRendered?>">
<thead>
    <th colspan="8">
        <div class="btn-group btn-group-justified">
                <a href="" class="navigate btn btn-primary" data-show="<?=$monthRendered-1?>" data-hide="<?=$monthRendered?>">&#8678; <?=Yii::t('calendar','Previous')?></a>
                <a href="" class="navigate btn btn-primary disabled d-xs-none d-sm-none"><?=$title?></a>
                <a href="" class="navigate btn btn-primary disabled d-md-none d-lg-none"><?=$title?></a>
                <a href="" class="navigate btn btn-primary" data-show="<?=$monthRendered+1?>" data-hide="<?=$monthRendered?>"><?=Yii::t('calendar','Next')?> &#8680;</a>
        </div>
    </th>
</thead>
<thead>
<th class="d-xs-none d-sm-none"><?=Yii::t('calendar','Week')?></th>
<th class="d-xs-none d-sm-none"><?=Yii::t('calendar','Monday')?></th>
<th class="d-xs-none d-sm-none"><?=Yii::t('calendar','Tuesday')?></th>
<th class="d-xs-none d-sm-none"><?=Yii::t('calendar','Wednesday')?></th>
<th class="d-xs-none d-sm-none"><?=Yii::t('calendar','Thursday')?></th>
<th class="d-xs-none d-sm-none"><?=Yii::t('calendar','Friday')?></th>
<th class="d-xs-none d-sm-none"><?=Yii::t('calendar','Saturday')?></th>
<th class="d-xs-none d-sm-none"><?=Yii::t('calendar','Sunday')?></th>
<th class="d-md-none d-lg-none"><?=Yii::t('calendar','W')?></th>
<th class="d-md-none d-lg-none"><?=Yii::t('calendar','Mo')?></th>
<th class="d-md-none d-lg-none"><?=Yii::t('calendar','Tu')?></th>
<th class="d-md-none d-lg-none"><?=Yii::t('calendar','We')?></th>
<th class="d-md-none d-lg-none"><?=Yii::t('calendar','Th')?></th>
<th class="d-md-none d-lg-none"><?=Yii::t('calendar','Fr')?></th>
<th class="d-md-none d-lg-none"><?=Yii::t('calendar','Sa')?></th>
<th class="d-md-none d-lg-none"><?=Yii::t('calendar','Su')?></th>
</thead>

<?=$content?>

</table>