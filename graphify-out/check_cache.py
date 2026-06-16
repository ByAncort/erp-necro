import json
from graphify.cache import check_semantic_cache
from pathlib import Path

detect = json.loads(Path("graphify-out/.graphify_detect.json").read_text(encoding="utf-8"))
all_files = [f for files in detect["files"].values() for f in files if files]

cached_nodes, cached_edges, cached_hyperedges, uncached = check_semantic_cache(all_files)

if cached_nodes or cached_edges or cached_hyperedges:
    Path("graphify-out/.graphify_cached.json").write_text(
        json.dumps({"nodes": cached_nodes, "edges": cached_edges, "hyperedges": cached_hyperedges}))
Path("graphify-out/.graphify_uncached.txt").write_text("\n".join(uncached), encoding="utf-8")

non_code = []
for ext, flist in detect["files"].items():
    if ext not in ("code", "video"):
        non_code.extend(flist)
uncached_non_code = [f for f in non_code if f in uncached]
total_non_code = len(non_code)
total_uncached = len(uncached_non_code)
print(f"Non-code files: {total_non_code} total, {total_uncached} uncached")
if total_uncached > 0:
    chunks = (total_uncached + 10) // 11
    print(f"Semantic: ~{total_uncached} files -> {chunks} chunks (~11 each)")
