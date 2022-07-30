<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\WebhookServer\WebhookCall;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $json_test = json_encode([
            "Type" => "SubscriptionConfirmation",
            "MessageId" => "165545c9-2a5c-472c-8df2-7ff2be2b3b1b",
            "Token" => "2336412f37f...",
            "TopicArn" => "arn:aws:sns:us-west-2:123456789012:MyTopic",
            "Message" => "You have chosen to subscribe to the topic arn:aws:sns:us-west-2:123456789012:MyTopic.\nTo confirm the subscription, visit the SubscribeURL included in this message.",
            "SubscribeURL" => "https://sns.us-west-2.amazonaws.com/?Action=ConfirmSubscription&TopicArn=arn:aws:sns:us-west-2:123456789012:MyTopic&Token=2336412f37...",
            "Timestamp" => "2012-04-26T20:45:04.751Z",
            "SignatureVersion" => "1",
            "Signature" => "EXAMPLEpH+...",
            "SigningCertURL" => "https://sns.us-west-2.amazonaws.com/SimpleNotificationService-f3ecfb7224c7233fe7bb5f59f96de52f.pem"
        ]);

        WebhookCall::create()
            ->url('http://127.0.0.1:8085/webhook-receiving-url')
            ->payload(['test' => $json_test])
            ->useSecret('secret')
            ->dispatch();
        return $json_test;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
