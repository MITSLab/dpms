<table {{ $attributes->merge(['class' => 'table table-bordered dt-responsive nowrap', 'id' => 'datatable']) }}
    style="
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
    ">
    <thead>
        {{ $thead }}
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>