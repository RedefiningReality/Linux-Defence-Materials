# Useful Commands Reference
`… | grep [contents]` ⇒ only show lines with [contents] <br>
- `\|` in [contents] is an or
- `-E` or `egrep` allows | without backslash
- `-i` ignores case

`… | grep -v [contents]` ⇒ only show lines without [contents] <br>
`… | cut -d [delimiter] -f [field]` <br>
`… | uniq` ⇒ unique (only display duplicate lines once) <br>
`… | tr [original] [new]` ⇒ replace corresponding character in [original] with character in same position in new [new]
- ex. `… | tr [a-z] [A-Z]`

`… | tr -d [chars]` ⇒ delete all instances of every character in [chars] <br>
`… | tr -s [chars]` ⇒ (squash) remove repeats for each character in [chars]
- ex. `… | tr -s " " | cut -d " " -f [field]`

`… | sed 's/[original]/[new]/g'` ⇒ replace all [original] with [new] <br>
`… | sed -i 's/[original]/[new]/g' [file]` ⇒ replace all [original] with [new] in [file] <br>
`… | base64 -d` ⇒ base-64 decode output <br>
`… | more` ⇒ scrollable output <br>
`… | tee [file]` ⇒ both print to standard output and save to file
