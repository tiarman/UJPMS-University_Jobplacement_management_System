@extends('layout.admin')

@section('content')
  <div class="container">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
          <h2 class="text-lg font-medium text-gray-900">Application Programming Interface (API)</h2>

          <p class="mt-3 text-sm text-gray-600">
            In general, APIs provide a way for software components to interact with each other, enabling developers to create complex applications that can leverage existing software services or data. APIs are an important part of modern software development, enabling developers to create powerful, flexible, and scalable software applications.
          </p>
          <p class="mt-2 text-sm text-gray-600">
            <strong>Graduates list for AProMIS (ASSET Project MIS)</strong>
          </p>
        </div>

        <div class="px-4 sm:px-0">

        </div>
      </div>

      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="#" method="POST">
          @csrf
          <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
            <div class="grid grid-cols-8 gap-6">
              <div class="col-span-6 sm:col-span-4">
                <label class="block font-medium text-sm text-gray-700" for="url">API Url</label>
                <span>API URLs typically have a specific structure that follows the conventions of the API provider. They often include a base URL that identifies the domain and path of the API, followed by a resource path that identifies the specific endpoint or resource being accessed.</span>
                <input
                  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                  id="url" disabled readonly
                  name="url" type="text" autocomplete="url" value="{{ $url }}">
              </div>
              <div class="col-span-6 sm:col-span-4">
                <label class="block font-medium text-sm text-gray-700" for="key">API Key</label>
                <span>API keys are usually long strings of characters or numbers, and they are often associated with a specific user account or application. It's important to keep API keys secure, as they can be used to access sensitive data or perform actions on behalf of the user.</span>
                <textarea rows="3" id="key" disabled readonly name="key"
                          class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                >{{ $key }}</textarea>
              </div>
              <div class="col-span-6 sm:col-span-4">
                <label class="block font-medium text-sm text-gray-700" for="secret">API Secret</label>
                <span>It's important to keep API secrets secure to prevent unauthorized access to protected resources or data. API secrets should be treated like any other sensitive credential, such as a password, and should be stored securely and transmitted over encrypted connections.</span>
                <textarea rows="3" id="secret" disabled readonly name="secret"
                          class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                >{{ $secret }}</textarea>
              </div>
              <div class="col-span-6 sm:col-span-4">
                <label class="block font-medium text-sm text-gray-700" for="access_token">API Access Token</label>
                <span>Access tokens are used in combination with an API key and secret to provide an additional layer of security when making API requests. When a user logs in or authenticates with an API provider, they are issued an access token, which is then included in API requests to authenticate the user and grant access to protected resources.</span>
                <textarea rows="3" id="access_token" disabled readonly name="access_token"
                          class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                >{{ $access_token }}</textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
@endsection
