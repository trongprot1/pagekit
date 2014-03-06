<div class="uk-form-row">
    <span class="uk-form-label">@trans('User Type')</span>
    <div class="uk-form-controls uk-form-controls-text">
        @foreach (['login' => trans('Logged in'), 'registered' => trans('Last registered')] as value => option)
        <p class="uk-form-controls-condensed">
            <label><input type="radio" name="widget[show]" value="@value" @(widget.get('show') == value ? 'checked')> @option</label>
        </p>
        @endforeach
    </div>
</div>
<div class="uk-form-row">
    <label class="uk-form-label">@trans('Number of Users')</label>
    <div class="uk-form-controls">
        <select class="uk-form-width-large" name="widget[count]">
            @foreach ([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16] as value)
            <option value="@value" @(widget.get('count') == value ? 'selected')>@value</option>
            @endforeach
        </select>
    </div>
</div>