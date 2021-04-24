@csrf
<div class="md-form">
  <label>ルーム名</label>
  <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="body" required class="form-control" rows="6" placeholder="募集内容">{{ old('body') }}</textarea>
</div>
<!--
<div class="form-group">
  <label></label>
  <textarea name="body" required class="form-control" rows="1" placeholder="Zoom-URL"></textarea>
</div>
-->