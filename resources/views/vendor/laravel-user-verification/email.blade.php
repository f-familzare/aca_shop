برای تایید فعالسازی حساب کاربری خود اینجا کلیک کنید: <a href="{{ $link = route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) }}">{{ $link }}</a>
