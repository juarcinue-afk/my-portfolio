<!DOCTYPE html>
<html>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #222;">
    <h2>New portfolio message</h2>
    <p><strong>Name:</strong> {{ $contact->name }}<br>
       <strong>Email:</strong> {{ $contact->email }}<br>
       <strong>Subject:</strong> {{ $contact->subject }}</p>
    <hr>
    <p style="white-space: pre-wrap;">{{ $contact->message }}</p>
</body>
</html>
