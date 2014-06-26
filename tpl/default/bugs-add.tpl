{if !empty($bug)}
    <h2>{t}File a bug{/t}</h2>
    <hr>
    <form class="form-horizontal" id="bug-add-form">
        <div class="form-group">
            <label for="addon-name" class="col-md-2">
                {t}Addon name:{/t}
            </label>
            <div class="col-md-10">
                <input type="text" placeholder="Super tux" name="addon-name" id="addon-name" style="display: block; width: 100%" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="bug-title" class="col-md-2">
                {t}Title:{/t}
            </label>
            <div class="col-md-10">
                <input type="text" placeholder="Title" name="bug-title" id="bug-title" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="bug-description" class="col-md-2">
                {t}Description:{/t}
            </label><br>
            <div class="col-md-10">
                <textarea id="bug-description" name="bug-description" class="form-control" rows="10" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-2">
                <input type="hidden" name="action" value="add">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </div>
    </form>
{else}
    <div class="alert alert-warning">
        <strong>{t}Warning!{/t}</strong> {t}You must be {/t}<a href="{$smarty.const.SITE_ROOT}login.php?return_to={$current_url}">{t}logged in{/t}</a>
    </div>
{/if}
