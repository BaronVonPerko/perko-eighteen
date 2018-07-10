/*
Use this script to convert the existing
posts that have a 'Video' category
into the newly created Video CTP
 */

update wp_posts
set post_type = 'video'
where id in
(
  select object_id
  from wp_term_relationships
  where term_taxonomy_id =
  (
    select term_id
    from wp_terms
    where name = 'Video'
  )
)