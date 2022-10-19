<div class="modal-header">
    <h4 class="modal-title">Loại: <?=$data->{'ten_loai'};?></h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="form-group">
        <label>ID</label>
        <input type="text" class="form-control" value="<?=$data->{'id'};?>" readonly>
    </div>
    <div class="form-group">
        <label>Tên loại</label>
        <input type="text" id="name" class="form-control" value="<?=$data->{'ten_loai'};?>">
    </div>
    <div id="result_change"></div>
</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button id="changes" class="btn btn-primary" onclick="changesInfo('changes','<?=$data->{'id'};?>')">Save
        changes</button>
</div>