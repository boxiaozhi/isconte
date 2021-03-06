@extends('frontend.layouts.main')
@section('css')
    <link rel="stylesheet" href="https://cdn.bootcss.com/bulma/0.7.4/css/bulma.min.css" />
    <style type="text/css">
        .hero-footer{
            padding: 1rem;
        }
    </style>
@endsection
@section('content')
    <section class="hero is-dark is-fullheight">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    <a href="/">
                        <b>{{ $info['Nickname']['children'][0]['text'] }}</b>
                    </a>
                </h1>
                <h2 class="subtitle">
                    @php
                        $index = rand(0,2);
                        $slogan = $info['Slogan']['children'][$index]['text'];
                    @endphp
                    <p class="">{{ $slogan }}</p>
                </h2>
                <nav class="breadcrumb is-small" aria-label="breadcrumbs">
                    <ul>
                        @foreach($info['Contact']['children'] as $item)
                            @if(isset($item['finish']) && $item['finish'])
                                @continue
                            @endif
                            <li>
                            @php
                                $url = getUrl($item['note']);
                                $textArr = explode('.', $item['text']);
                                $text = $textArr[0];
                                $cnt = count($textArr);
                            @endphp
                            @if($url)
                                <a href="{{ $url }}" target="_self" title="{{ $url }}">
                                    @if($cnt > 1)
                                        <span class="icon is-small">
                                            <i class="{{ $textArr[1] }}" aria-hidden="true"></i>
                                        </span>
                                    @endif
                                    {{ $text }}
                                </a>
                            @else
                                <a title="{{ $item['note'] }}">
                                    @if($cnt > 1)
                                        <span class="icon is-small">
                                            <i class="{{ $textArr[1] }}" aria-hidden="true"></i>
                                        </span>
                                    @endif
                                    {{ $text }}
                                </a>
                            @endif
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <nav class="breadcrumb is-small" aria-label="breadcrumbs">
                    <ul>
                        @foreach($info['SiteLink']['children'] as $item)
                            <li>
                            @php
                                $url = getUrl($item['note']);
                            @endphp
                            @if($url)
                                <a href="{{ $url }}" target="_self" title="{{ $url }}">{{ $item['text'] }}</a>
                            @else
                                <a title="{{ $item['note'] }}">{{ $item['text'] }}</a>
                            @endif
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
        <div class="hero-footer">
            @include("frontend.layouts._footer")
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('js/frontend/main.js') }}"></script>
@endsection