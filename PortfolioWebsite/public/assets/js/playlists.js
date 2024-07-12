$(document).ready(function() {

    function fetchPlaylists() {

        $.ajax({
            url: '/playlists', 
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#playlistList').empty(); // Clear previous items
                //check if response contains array
                if (response.hasOwnProperty('items') && Array.isArray(response.items)) {
                    //iterate array and display playlist names
                    response.items.forEach(function(playlist) {
                        $('#playlistList').append('<a href="/reccomend" class="postPlaylist"><li>' + playlist.name + '</li></a>');
                        appendToLocalStorage('playlists', playlist);
                    });
                } else {
                    console.error('Unexpected response format:', response);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }

    function checkLocalStorageForPlaylists() {
        var playlists = JSON.parse(localStorage.getItem('playlists'));
        if (playlists && Array.isArray(playlists)) {
            // Display playlists from local storage
            $('#playlistList').empty(); // Clear previous items
            playlists.forEach(function(playlist) {
                $('#playlistList').append('<a href="/reccomend" class="postPlaylist"><li>' + playlist.name + '</li></a>');
            });
            showReplacementContent(); // Show the replacement content
        }
    }

    checkLocalStorageForPlaylists();

    // Event handler for button click
    $('#getPlaylistsBtn').click(function() {
        fetchPlaylists();
        showReplacementContent();
    });

    function showReplacementContent() {
        var initialContent = document.getElementById('getPlaylistsBtn');
        var contentContainer = document.getElementById('replace');

        var replacementContent = document.createElement('p');
        replacementContent.id = 'replacementContent';
        replacementContent.style.display = 'none'; // Hide by default
        replacementContent.textContent = `Select a playlist to generate a recommended playlist based on that
            playlist's contents`;

        contentContainer.replaceChild(replacementContent, initialContent);
        replacementContent.style.display = 'block';
    }

});


$(document).ready(function() {
    $('#playlistList').on('click', '.postPlaylist', function(event) {
        event.preventDefault();

        var playlistName = $(this).text(); //get playlist name from clicked link
        var playlists = JSON.parse(localStorage.getItem('playlists')); //get playlist from local storage
        var playlistId = null;
        //find playlist id in local storage
        for (var i = 0; i < playlists.length; i++) {
            if (playlists[i].name === playlistName) {
                playlistId = playlists[i].id;
                break;
            }
        }
        
        $.ajax({
            type: 'POST',
            url: '/reccomend', 
            dataType: 'json',
            data: { playlistId: playlistId },
            success: function(response) {
                //save new tracks to local storage
                localStorage.setItem('newTracks', JSON.stringify(response));
                window.location.href = '/newPlaylist';
            },
            error: function(xhr, status, error) {
                //handle errors
                console.error('Error making POST request:', error);
            }
        });
    });
});

//function to append to local storage
function appendToLocalStorage(key, data) {
    let playlists = JSON.parse(localStorage.getItem(key)) || [];
    playlists.push(data);
    localStorage.setItem(key, JSON.stringify(playlists));
}