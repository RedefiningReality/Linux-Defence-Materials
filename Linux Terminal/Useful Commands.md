# Useful Commands Reference
`… | grep [contents]` or `grep [contents] [file]` ⇒ only show lines with `[contents]` <br>
- `-v [contents]` ⇒ only show lines *without* `[contents]`
- `\|` in `[contents]` is an or
- `-E` or `egrep` allows regex (including | without backslash)
- `-i` ⇒ ignore case
- `grep -Horn [dir]` ⇒ recursively search `[dir]` for files containing `[contents]`
  - `-Hrn` (without the `o`) ⇒ display text surrounding `[contents]` as well as filename

`… | tr [original] [new]` ⇒ replace corresponding character in [original] with character in same position in new [new]
- ex. `… | tr [a-z] [A-Z]` ⇒ make text uppercase

`… | tr -d [chars]` ⇒ delete all instances of every character in [chars] <br>
`… | tr -s [chars]` ⇒ (squash) remove repeats for each character in [chars]
- ex. `… | tr -s " " | cut -d " " -f [field]` ⇒ get `[field]` but account for contiguous spaces

`… | cut -d [delimiter] -f [field]` ⇒ get `[field]` field from each line after cutting it with `[delimiter]` <br>
`… | uniq` ⇒ unique (only display duplicate lines once) <br>

`… | sed 's/[original]/[new]/g'` or `sed 's/[original]/[new]/g' [file]` ⇒ replace all [original] with [new] in output <br>
`sed -i 's/[original]/[new]/g' [file]` ⇒ replace all [original] with [new] in [file] <br>
`… | base64 -d` ⇒ base-64 decode output <br>
`… | more` or `… | less` ⇒ scrollable output <br>
`… | tee [file]` ⇒ both print to standard output and append to `[file]`

---
https://www.geeksforgeeks.org/input-output-redirection-in-linux/
