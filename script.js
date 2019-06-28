function join(channel){

document.getElementById("join").disabled = true;
document.getElementById("leave").disabled = false;
  /**
 * @name handleFail
 * @param err - error thrown by any function
 * @description Helper function to handle errors
 */
let handleFail = function(err){
    console.log("Error : ", err);
};

// Queries the container in which the remote feeds belong
let remoteContainer= document.getElementById("remote-container");

/**
 * @name addVideoStream
 * @param streamId
 * @description Helper function to add the video stream to "remote-container"
 */
function addVideoStream(streamId){
    let streamDiv=document.createElement("div"); // Create a new div for every stream
    streamDiv.id=streamId;                       // Assigning id to div
    streamDiv.style.transform="rotateY(180deg)"; // Takes care of lateral inversion (mirror image)
    remoteContainer.appendChild(streamDiv);      // Add new div to container
}
/**
 * @name removeVideoStream
 * @param evt - Remove event
 * @description Helper function to remove the video stream from "remote-container"
 */
function removeVideoStream (evt) {
    let stream = evt.stream;
    stream.stop();
    let remDiv=document.getElementById(stream.getId());
    // remDiv.parentNode.removeChild(remDiv);
    console.log("Remote stream is removed " + stream.getId());
}

// Start code

let client=AgoraRTC.createClient({
    mode:'live',
    codec:'h264'
});

client.init("1c8c771cf3504f739ba6f09fa5f368f3",
            (function(){
    console.log("Initialized sucsessfully")
}))
            
client.join(null,channel,null,function(uid){
    let localstream=AgoraRTC.createStream({
        streamID:uid,
        audio:false,
        video:true,
        screen:false
    });
    localstream.init(()=>{
        localstream.play('me');
        client.publish(localstream,handleFail);
        client.on('stream-added',function(evt){
            client.subscribe(evt.stream,handleFail);
        });
        client.on('stream-subscribed',function(evt){
            let stream=evt.stream;
            addVideoStream(stream.getId());
            stream.play(stream.getId());
        });
        client.on('stream-removed',removeVideoStream,handleFail);
    },handleFail);
    
    client.on('stream-added',(evt)=>{
        client.subscribe(evt.stream,handleFail);
    },handleFail);
    
    client.on('stream-subscribe',(evt)=>{
        let stream=evt.stream;
        addVideoStream(Stream.getId());
        stream.play(stream.getId());
    })
    
    client.on('stream-removed',removeVideoStream);
})
}




//calls when we disconnect the call

function leave() {
  document.getElementById("leave").disabled = true;
  document.getElementById("join").disabled = false;

  client.unpublish(localStream, function (err) {
    console.log("Unpublish local stream failed" + err);
  });

  client.leave(function () {
    console.log("Leavel channel successfully");
  }, function (err) {
    console.log("Leave channel failed");
  });
}


