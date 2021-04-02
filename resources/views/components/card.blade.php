<div {{ $attributes->merge(['class' => 'card']) }}>
    <div class="card-body">
        @isset($title)
        <h4 class="mt-0 header-title d-flex justify-content-between">
            {{ $title }}
        </h4>
        @endisset
            {{ $slot }}
        @isset($desc)
        <p class="text-muted mb-4 font-13">
        {{ $desc }}
        </p>
        @endisset
    </div>
  </div>