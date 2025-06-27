@props(['title' => '', 'content' => '', 'class' => ''])

<div class="card shadow-sm border-0 {{ $class }}" style="transition: box-shadow 0.3s ease;">
    <div class="card-body">
        @if($title)
            <h5 class="card-title text-dark mb-3">{{ $title }}</h5>
        @endif
        
        @if($content)
            <p class="card-text text-muted">{{ $content }}</p>
        @endif
        
        {{ $slot }}
    </div>
</div>
