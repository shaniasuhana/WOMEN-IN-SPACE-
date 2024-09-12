import webbrowser
website = input ("Search Website: ")
if website == "google":
name = input("Search: ")
webbrowser. open ("https://www.google.ca/search?q=" + name)
elif website ＝= "youtube":
name = input ("Search: ")
webbrowser. open ("https://www.youtube.com/results?search_query=" + name)
elif website == "musescore":
name = input ("Search: ")
webbrowser. open ("https://musescore.com/sheetmusic?text=" + name)