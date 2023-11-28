@extends('layouts.main')
@section('content')
    <div class="container">
        <form action="{{ route('user.update', $accessories->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div>
                <h2>{{ $user->name }}</h2>
            </div>

            <div class="mb-3">
                <label for="category">Процессор</label>
                <select class="form-control w-50" id="processor_id" name="processor_id">
                    @foreach ($processors as $processor)
                        <option {{ $accessories->processor_id == $processor->id ? 'selected' : '' }}
                            value="{{ $processor->id }}">{{ $processor->NameProcessor }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="category">Видеокарта</label>
                <select class="form-control w-50" id="video_card_id" name="video_card_id">
                    @foreach ($videoCards as $videoCard)
                        <option {{ $accessories->video_card_id == $videoCard->id ? 'selected' : '' }}
                            value="{{ $videoCard->id }}">{{ $videoCard->NameVideoCard }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Edit</button>
        </form>
    </div>
@endsection
