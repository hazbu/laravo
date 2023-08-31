<div class="" data-command="">
    <form action="{{ route('voyager.compass.post') }}" class="" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="command" id="hidden_cmd" value="joy-voyager-api:l5-swagger:generate">
        <input type="submit" class="btn btn-success"value="Sync REST API">
    </form>
</div>
<iframe
    id="inlineFrame"
    class="inlineFrame"
    title="Inline Frame"
    style="border:none;width:100%;height:200vh"
    src="/api/documentation"
    scrolling="auto"
>
</iframe>