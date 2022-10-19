<div class="modal-header">
    <h4 class="modal-title">Người dùng: <?=$data->{'name'};?></h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" value="<?=$data->{'username'};?>" readonly>
    </div>
    <div class="form-group">
        <label>Họ và tên</label>
        <input type="text" id="name" class="form-control" value="<?=$data->{'name'};?>">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" id="email" class="form-control" value="<?=$data->{'email'};?>">
    </div>
    <div class="form-group">
        <label>Số điện thoại</label>
        <input type="text" id="phone" class="form-control" value="<?=$data->{'phone'};?>">
    </div>
    <div class="form-group">
        <label>Chức vụ</label>
        <select id="rule" class="form-control">
            <option value="0">Thành viên</option>
            <option value="1">Quản trị viên</option>
        </select>
    </div>
    <div id="result_change"></div>
</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button id="changes" class="btn btn-primary" onclick="changesInfo('changes','<?=$data->{'id'};?>')">Save
        changes</button>
</div>